@include('errors._error-layout', [
    'title' => '403 | Acesso negado',
    'eyebrow' => 'Erro de autorização',
    'code' => '403',
    'heading' => 'Acesso negado',
    'message' => 'Você não possui permissão para acessar este recurso no momento.',
    'detail' => 'O sistema entendeu sua solicitação, mas bloqueou o acesso por falta de autorização.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '!',
])