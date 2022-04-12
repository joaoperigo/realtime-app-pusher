<?php

namespace App\Listeners;

// commented because professor's IDE seens change this automatically
// use Illuminate\Auth\Events\Login; 
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserSessionChanged;
use Illuminate\Auth\Events\Login;

class BroadcastUserLoginNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        broadcast(new UserSessionChanged("{$event->user->name} is online", 'success'));
    }
}
