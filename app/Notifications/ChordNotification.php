<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use App\Models\Chord;

class ChordNotification extends Notification
{
    use Queueable;
    public $chord;
    /**
     * Create a new notification instance.
     */
    public function __construct(Chord $chord)
    {
        $this->chord = $chord;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'name'=>$this->chord->song->name,
            'id'=>$this->chord->song_id,
            'route'=>route('acordes.show', $this->chord->id),
            'user_id'=> $this->chord->user_id,
            'message'=> 'Nuevos acordes subidos',
            'description'=>User::find($this->chord->user_id)->name.' subió nuevos acordes'
        ];
    }
}