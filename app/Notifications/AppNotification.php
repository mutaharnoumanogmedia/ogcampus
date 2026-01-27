<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;

class AppNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $title;
    public $message;
    public $url;
    public $type;
    public $from;
    public $for_user;
    public $role;

    public function __construct($title, $message, $url = null, $type = null, $from = null, $for_user = null, $role = null)
    {
        $this->title = $title;
        $this->message = $message;
        $this->url = $url;
        $this->type = $type;
        $this->from = $from;
        $this->for_user = $for_user;
        $this->role = $role;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'url' => $this->url,
            'type' => $this->type,
            'from' => $this->from,
            'for_user' => $this->for_user,
            'role' => $this->role,
        ];
    }
}
