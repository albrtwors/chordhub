<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentOwnerNotification extends Notification
{
    use Queueable;

    public $comment;
    /**
     * Create a new notification instance.
     */
    public function __construct($comment)
    {
        $this->comment = $comment;
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
        $comment_id = $this->comment->commentable_id;
        $comment_type = $this->comment->commentable_type;
        
        if($comment_type == 'App\Models\Song'){
            $route = route('canciones.show', $comment_id);
            $message = $this->comment->user->name . ' Escribió un comentario en tu canción '. $this->comment->commentable->name;
        }elseif($comment_type == 'App\Models\File'){
            $route = route('cancioneros.show', $comment_id);
            $message = $this->comment->user->name . ' Escribió un comentario en tu cancionero '. $this->comment->commentable->name;
        }elseif($comment_type == 'App\Models\Chord'){
            $comment_id = $this->comment->commentable->id;
            $message = $this->comment->user->name . ' Escribió un comentario en tus acordes '. $this->comment->commentable->name;
            $route = route('acordes.show', $comment_id);
        }
        
        return [
            'message'=>$message,
            'comment'=>$this->comment->comment,
            'route'=>$route,
            'author'=>$this->comment->user_id,
            'parent'=>$this->comment->parent_id
        ];
    }
}