<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SecretariaResetPasswordNotification extends Notification
{
    use Queueable;

    public function __construct(private readonly string $token) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $url = route('secretaria.password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ]);

        return (new MailMessage)
            ->subject('Redefinição de senha da Secretaria')
            ->line('Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha.')
            ->action('Redefinir senha', $url)
            ->line('Se você não solicitou a redefinição, nenhuma ação é necessária.');
    }
}
