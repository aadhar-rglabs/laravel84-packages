<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmpFeedbackCollection;
// use App\Models\EmployeeExitProcess;
use App\Models\EmployeeExitProcessWithdrawRequests;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class EmployeeExitProcessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $details = [])
    {
        $data = [
            "LINE_START" => __LINE__,
            "FILE" => __FILE__,
            "User" => $user,
            "Details" => $details,
            "LINE_END" => __LINE__,
        ];
        $this->user = $user;
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            "LINE_START" => __LINE__,
            "FILE" => __FILE__,
            "Name" => $this->user->firstname . " " . $this->user->lastname,
            "reset_password_token" => $this->user->reset_password_token,
            "email" => $this->user->email,
            "personal_email" => $this->user->personal_email,
            "details" => $this->details,
            "LINE_END" => __LINE__,
        ];
        Log::info($data);
        return $this->view('email.forgot-password')
            ->with([
                'name' => $this->user->firstname . " " . $this->user->lastname,
                // 'action_url' => "http://localhost:3000/reset-password?token=" . $this->user->reset_password_token,
                // 'action_url' => config('app.front_url') . "reset-password?token=" . uniqid("", false) . time(),
                'action_url' => route('employee.ResetPassword', ['token' => uniqid("", false) . time()]),
                'email' => $this->user->email,
                'personal_email' => $this->user->personal_email,
                'details' => $this->details,
            ]);
        // return $this->markdown('emails.employeeexitprocess.employeeexitprocess');
    }
}
