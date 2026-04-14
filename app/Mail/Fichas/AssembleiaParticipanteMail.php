<?php

namespace App\Mail\Fichas;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AssembleiaParticipanteMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    protected array $dados;

    public function __construct(array $dados)
    {
        $this->dados = $dados;
    }

    public function build(): self
    {
        $numero = $this->dados['numero'] ?? '';
        $sexoLabel = $this->dados['sexoLabel'] ?? 'Assembleia';

        return $this->subject("Inscrição confirmada — Assembleia Diocesana {$numero}")
            ->view('emails.fichas.assembleia.AssembleiaParticipanteMail')
            ->with($this->dados);
    }
}