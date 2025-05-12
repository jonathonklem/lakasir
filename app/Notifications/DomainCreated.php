<?php

namespace App\Notifications;

use App\Models\Tenants\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DomainCreated extends Notification implements ShouldQueue
{
    use Queueable;

    public function via(User $notifiable)
    {
        return ['mail'];
    }

    public function toMail(User $notifiable)
    {
        return (new MailMessage)
            ->line('Welcome to ManageRegister')
            ->line('Thank you for using our application!')
            ->line('We have created a domain for you: '.tenant()->domains->first()->domain.' .')
            ->line('Let us know if you have any questions.')
            ->line('Thanks,')
            ->salutation('ManageRegister Team');
    
    }

    public function toArray(User $notifiable)
    {
        return [
            //
        ];
    }
}
