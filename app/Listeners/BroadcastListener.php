<?php

namespace App\Listeners;

use App\Events\BroadcastEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BroadcastListener
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
     * @param  BroadcastEvent  $event
     * @return void
     */
    public function handle(BroadcastEvent $event)
    {
        //
    }
}
