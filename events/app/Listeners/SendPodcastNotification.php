<?php

namespace App\Listeners;

use App\Events\PodcastProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendPodcastNotification
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
     * @param  PodcastProcessed  $event
     * @return void
     */
    public function handle(PodcastProcessed $event)
    {
        Log::info("Podcast Started");
    }
}
