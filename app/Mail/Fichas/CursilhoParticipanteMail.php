<?php

namespace App\Mail\Fichas;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CursilhoParticipanteMail extends Mailable
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
        $sexoLabel = $this->dados['sexoLabel'] ?? '';

        return $this->subject("Inscrição confirmada — {$numero}º Cursilho para {$sexoLabel}")
            ->view('emails.fichas.cursilho.participante')
            ->with($this->dados);
    }
}