<?php

namespace App\Listeners;

use App\Events\QuoteCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuoteCreated  $event
     * @return void
     */
    public function handle(QuoteCreated $event)
    {
        $email = "t.ramakrishnamaraju@gmail.com";
        $name = "Rama krishna";
        
        Mail::send('email.usernotification',['name'=>$name],function($message) use ($email,$name){
            $message->from('starkittu@gmail.com','Admin');
            $message->to($email,$name);
            $message->subject('Great looking you here');
            
        });
    }
}
