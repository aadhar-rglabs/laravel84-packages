<?php

namespace App\Events;

use Illuminate\Support\Facades\Log;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmpFeedbackCollection;
// use App\Models\EmployeeExitProcess;
use App\Models\EmployeeExitProcessWithdrawRequests;
use App\Models\User;

class EmployeeExitProcess
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    public $details;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $details)
    {
        $data = [
            "LINE_START" => __LINE__,
            "FILE" => __FILE__,
            "User" => $user,
            "Details" => $details,
            "LINE_END" => __LINE__,
        ];
        Log::info($data);
        $this->user = $user;
        $this->details = $details;
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
