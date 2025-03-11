<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeExitProcessWithdrawRequests extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'employee_exit_process_withdraw_requests';

    // Define the primary key for the model
    protected $primaryKey = 'id';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'employee_id',
        'employee_exit_process_id',
        'request_date',
        'reason',
        'approved_by',
        'approved_at',
        'added_by',
        'status'
    ];

    // Define the attributes that should be hidden for arrays
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Define the attributes that should be cast to native types
    protected $casts = [
        'request_date' => 'datetime',
        'approved_at' => 'datetime'
    ];
}
