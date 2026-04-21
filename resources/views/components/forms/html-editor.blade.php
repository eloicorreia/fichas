@props([
    'name',
    'label',
    'value' => null,
    'id' => null,
    'hint' => null,
])

@php
    $fieldId = $id ?? str_replace(['[', ']', '.'], '_', $name);
    $inputId = $fieldId . '_input';
    $editorValue = old($name, $value);
@endphp

<div>
    <label class="mb-2 block text-sm font-semibold text-slate-700" for="{{ $inputId }}">
        {{ $label }}
    </label>

    <input
        id="{{ $inputId }}"
        type="hidden"
        name="{{ $name }}"
        value="{{ $editorValue }}"
    >

    <trix-editor
        input="{{ $inputId }}"
        class="trix-content"
    ></trix-editor>

    @if ($hint)
        <p class="mt-2 text-xs text-slate-500">{{ $hint }}</p>
    @endif

    @error($name)
        <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
    @enderror
</div>