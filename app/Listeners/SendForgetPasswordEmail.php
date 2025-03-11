<?php

namespace App\Listeners;

use App\Events\ForgetPasswordRequested;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendForgetPasswordEmail
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
     * @param  \App\Events\ForgetPasswordRequested  $event
     * @return void
     */
    public function handle(ForgetPasswordRequested $event)
    {
        //
    }
}
