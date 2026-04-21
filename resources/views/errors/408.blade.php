@include('errors._error-layout', [
    'title' => '408 | Tempo esgotado',
    'eyebrow' => 'Tempo limite excedido',
    'code' => '408',
    'heading' => 'Tempo da requisição esgotado',
    'message' => 'A solicitação demorou mais do que o permitido para ser concluída.',
    'detail' => 'Verifique sua conexão, atualize a página e tente novamente.',
    'primaryUrl' => url()->current(),
    'primaryLabel' => 'Tentar novamente',
    'icon' => '⏱',
])