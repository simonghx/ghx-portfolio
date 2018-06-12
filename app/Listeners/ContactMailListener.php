<?php

namespace App\Listeners;

use App\Events\Contact;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\ContactMail;

class ContactMailListener
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
     * @param  Contact  $event
     * @return void
     */
    public function handle(Contact $event)
    {
        Mail::to($event->request)->send(new ContactMail($event->request));
    }
}
