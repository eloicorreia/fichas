@include('errors._error-layout', [
    'title' => '419 | Sessão expirada',
    'eyebrow' => 'Erro de sessão',
    'code' => '419',
    'heading' => 'Sessão expirada',
    'message' => 'Sua sessão expirou ou a solicitação não pôde ser validada com segurança.',
    'detail' => 'Atualize a página, faça login novamente se necessário e tente repetir a operação.',
    'primaryUrl' => url()->current(),
    'primaryLabel' => 'Atualizar página',
    'icon' => '↻',
])