<?php

namespace App\Listeners;

use App\Events\EmployeeExitProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\EmpFeedbackCollection;
// use App\Models\EmployeeExitProcess;
use App\Models\EmployeeExitProcessWithdrawRequests;

class EmployeeExitProcessEmail
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
     * @param  \App\Events\EmployeeExitProcess  $event
     * @return void
     */
    public function handle(EmployeeExitProcess $event)
    {
        //
    }
}
