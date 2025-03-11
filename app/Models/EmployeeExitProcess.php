<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeExitProcess extends Model
{
    use HasFactory;

    protected $table = 'employee_exit_process';

    protected $fillable = [
        "emp_id",
        "reason",
        "initiated_by",
        "initiated_by_id",
        "approved_by_team_lead",
        "approved_by_manager",
        "approved_by_hr",
        "approved_by_ceo",
        "approved_by_client",
        "replacement_requisition",
        "knowledge_transfer",
        "company_assets_recovery",
        "payroll_and_benefits",
        "exit_interview",
        "documentation_fnf",
        "feedback",
        "communication",
        "support_for_employee",
        "added_by",
        "status",
        "revoke_status",
        "revoke_by",
        "notice_buy_back_status",
        "notice_buy_back_amount",
        "date",
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
