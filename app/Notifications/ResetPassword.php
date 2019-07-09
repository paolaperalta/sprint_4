<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Recuperar Contraseña')
            ->greeting('¡Hola!')
            ->line('Estás recibiendo este email porque solicitaste recuperar la contraseña de tu cuenta de Gardenia.')
            ->action('Recuperar Contraseña', url('password/reset', $this->token))
            ->line('Si no solicitaste el recupero de contraseña, no necesitás realizar ninguna acción.')
            ->salutation('Saludos, '. config('app.name'));
    }
}
