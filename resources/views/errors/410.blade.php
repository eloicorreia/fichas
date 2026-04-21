@include('errors._error-layout', [
    'title' => '410 | Recurso indisponível',
    'eyebrow' => 'Recurso removido',
    'code' => '410',
    'heading' => 'Recurso não está mais disponível',
    'message' => 'O recurso solicitado existia anteriormente, mas não está mais disponível neste sistema.',
    'detail' => 'Esse conteúdo foi removido ou deixou de ser oferecido neste endereço.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '−',
])