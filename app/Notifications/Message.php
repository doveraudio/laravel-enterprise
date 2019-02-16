<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Message extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public $From;
    public $To;
    public $cc;
    public $Date;
    public $Sender;
    public $Subject;
    public $Body;
    public $ReplyTo;
    public $Signature;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->cc($this->cc)
                    ->from($this->From)
                    ->replyTo($this->ReplyTo)
                    ->action('Notification Action', url('/'))
                    ->line($this->Body);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
'From'      =>$this->From,
'To'        =>$this->To,
'Date'      =>$this->Date,
'Sender'    =>$this->Sender,
'Subject'   =>$this->Subject,
'ReplyTo'   =>$this->ReplyTo,
'Body'      =>$this->Body,
'Signature' =>$this->Signature
        ];
    }
}
