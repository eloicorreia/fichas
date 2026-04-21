@include('errors._error-layout', [
    'title' => '503 | Indisponível',
    'eyebrow' => 'Serviço indisponível',
    'code' => '503',
    'heading' => 'Sistema temporariamente indisponível',
    'message' => 'O sistema está indisponível no momento, possivelmente por manutenção ou instabilidade temporária.',
    'detail' => 'Tente acessar novamente dentro de alguns minutos.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '…',
])