@include('errors._error-layout', [
    'title' => '400 | Requisição inválida',
    'eyebrow' => 'Erro de requisição',
    'code' => '400',
    'heading' => 'Requisição inválida',
    'message' => 'A solicitação enviada não pôde ser entendida corretamente pelo sistema.',
    'detail' => 'Revise os dados informados ou tente repetir a operação a partir de uma tela válida do sistema.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '!',
])