@include('errors._error-layout', [
    'title' => '401 | Não autenticado',
    'eyebrow' => 'Erro de autenticação',
    'code' => '401',
    'heading' => 'Usuário não autenticado',
    'message' => 'Você precisa estar autenticado para acessar este recurso.',
    'detail' => 'Faça login e tente novamente. Se sua sessão tiver expirado, será necessário entrar novamente no sistema.',
    'primaryUrl' => route('secretaria.login'),
    'primaryLabel' => 'Ir para o login',
    'icon' => '↳',
])