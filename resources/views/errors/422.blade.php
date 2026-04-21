@include('errors._error-layout', [
    'title' => '422 | Dados inválidos',
    'eyebrow' => 'Erro de validação',
    'code' => '422',
    'heading' => 'Não foi possível processar os dados',
    'message' => 'A solicitação foi recebida, mas contém dados inválidos ou inconsistentes.',
    'detail' => 'Revise as informações preenchidas e tente novamente.',
    'primaryUrl' => url()->previous(),
    'primaryLabel' => 'Voltar para corrigir',
    'icon' => '✓',
])