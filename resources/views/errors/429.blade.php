@include('errors._error-layout', [
    'title' => '429 | Muitas requisições',
    'eyebrow' => 'Limite de uso',
    'code' => '429',
    'heading' => 'Muitas requisições',
    'message' => 'Foram feitas muitas tentativas em um curto intervalo de tempo.',
    'detail' => 'Aguarde alguns instantes antes de tentar novamente.',
    'primaryUrl' => auth()->check() ? route('secretaria.dashboard') : url('/'),
    'primaryLabel' => auth()->check() ? 'Voltar ao dashboard' : 'Ir para a página inicial',
    'icon' => '⏳',
])