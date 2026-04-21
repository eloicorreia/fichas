<?php

declare(strict_types=1);

namespace App\Services\Support;

use DOMDocument;
use DOMElement;
use DOMNode;
use DOMText;

class HtmlSanitizerService
{
    /**
     * Tags permitidas no conteúdo rico.
     *
     * @var array<int, string>
     */
    private array $allowedTags = [
        'a',
        'blockquote',
        'br',
        'div',
        'em',
        'h3',
        'h4',
        'li',
        'ol',
        'p',
        'strong',
        'ul',
    ];

    /**
     * Atributos permitidos por tag.
     *
     * @var array<string, array<int, string>>
     */
    private array $allowedAttributes = [
        'a' => ['href', 'target', 'rel'],
    ];

    /**
     * Sanitiza um fragmento HTML.
     */
    public function sanitize(?string $html): ?string
    {
        if ($html === null) {
            return null;
        }

        $html = trim($html);

        if ($html === '') {
            return null;
        }

        $document = new DOMDocument('1.0', 'UTF-8');

        libxml_use_internal_errors(true);

        $wrappedHtml = '<!DOCTYPE html><html><body><div id="root">'.$html.'</div></body></html>';

        $document->loadHTML(
            mb_convert_encoding($wrappedHtml, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        libxml_clear_errors();

        $root = $document->getElementById('root');

        if (!$root instanceof DOMElement) {
            return null;
        }

        $this->sanitizeChildren($root);

        $cleanHtml = '';

        foreach ($root->childNodes as $childNode) {
            $cleanHtml .= $document->saveHTML($childNode);
        }

        $cleanHtml = trim($cleanHtml);

        return $cleanHtml !== '' ? $cleanHtml : null;
    }

    /**
     * Sanitiza recursivamente os nós filhos.
     */
    private function sanitizeChildren(DOMNode $parentNode): void
    {
        for ($index = $parentNode->childNodes->length - 1; $index >= 0; $index--) {
            $childNode = $parentNode->childNodes->item($index);

            if (!$childNode instanceof DOMNode) {
                continue;
            }

            if ($childNode instanceof DOMText) {
                continue;
            }

            if (!$childNode instanceof DOMElement) {
                $parentNode->removeChild($childNode);
                continue;
            }

            $tagName = strtolower($childNode->tagName);

            if (!in_array($tagName, $this->allowedTags, true)) {
                $this->unwrapNode($childNode);
                continue;
            }

            $this->sanitizeAttributes($childNode, $tagName);
            $this->sanitizeChildren($childNode);
        }
    }

    /**
     * Remove atributos não permitidos do elemento.
     */
    private function sanitizeAttributes(DOMElement $element, string $tagName): void
    {
        $allowedAttributes = $this->allowedAttributes[$tagName] ?? [];

        for ($index = $element->attributes->length - 1; $index >= 0; $index--) {
            $attribute = $element->attributes->item($index);

            if ($attribute === null) {
                continue;
            }

            $attributeName = strtolower($attribute->name);

            if (!in_array($attributeName, $allowedAttributes, true)) {
                $element->removeAttribute($attributeName);
                continue;
            }

            if ($tagName === 'a' && $attributeName === 'href') {
                $href = trim($attribute->value);

                if ($href === '' || $this->isUnsafeHref($href)) {
                    $element->removeAttribute('href');
                    continue;
                }
            }
        }

        if ($tagName === 'a') {
            if ($element->hasAttribute('target')) {
                $element->setAttribute('target', '_blank');
                $element->setAttribute('rel', 'noopener noreferrer');
            }
        }
    }

    /**
     * Verifica se o href é inseguro.
     */
    private function isUnsafeHref(string $href): bool
    {
        $normalizedHref = mb_strtolower($href);

        return str_starts_with($normalizedHref, 'javascript:')
            || str_starts_with($normalizedHref, 'data:')
            || str_starts_with($normalizedHref, 'vbscript:');
    }

    /**
     * Remove a tag do nó, mantendo seu conteúdo.
     */
    private function unwrapNode(DOMElement $element): void
    {
        $parentNode = $element->parentNode;

        if (!$parentNode instanceof DOMNode) {
            return;
        }

        while ($element->firstChild instanceof DOMNode) {
            $parentNode->insertBefore($element->firstChild, $element);
        }

        $parentNode->removeChild($element);
    }
}