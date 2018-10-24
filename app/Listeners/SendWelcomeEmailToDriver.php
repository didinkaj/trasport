<?php

namespace App\Listeners;

use App\Events\DriverRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SendWelcomeEmailToDriver
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
     * @param  DriverRegistered  $event
     * @return void
     */
    public function handle(DriverRegistered $event)
    {
        //
        Log::info("mnfjrfir".$event->driver);
    }
}
