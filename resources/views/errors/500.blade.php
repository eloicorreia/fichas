@include('errors._error-layout', [
    'title' => '500 | Erro interno',
    'eyebrow' => 'Erro interno',
    'code' => '500',
    'heading' => 'Erro interno do sistema',
    'message' => 'Ocorreu uma falha inesperada ao processar sua solicitação.',
    'detail' => 'Tente novamente em alguns instantes. Se o problema persistir, entre em contato com o suporte.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '!',
])