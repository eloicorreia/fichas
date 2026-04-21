@include('errors._error-layout', [
    'title' => '404 | Página não encontrada',
    'eyebrow' => 'Erro de navegação',
    'code' => '404',
    'heading' => 'Página não encontrada',
    'message' => 'A página que você tentou acessar não existe ou não está disponível neste endereço.',
    'detail' => 'Verifique o endereço informado ou volte para uma área conhecida do sistema.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '?',
])