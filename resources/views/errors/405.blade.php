@include('errors._error-layout', [
    'title' => '405 | Método não permitido',
    'eyebrow' => 'Erro de requisição',
    'code' => '405',
    'heading' => 'Método não permitido',
    'message' => 'A operação solicitada não é permitida para este recurso.',
    'detail' => 'Verifique se a ação executada está correta e se a rota aceita esse tipo de requisição.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '×',
])