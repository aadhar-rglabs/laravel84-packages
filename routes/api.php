<?php

use App\Http\Controllers\EmployeeExitProcessController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ReimbursementController;
use App\Http\Controllers\ToDoListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ToDoListController::class)->group(function () {
    Route::post('todo-list/status-update/list/{list}/status/{status}', 'statusUpdate')->name('todo-list.status-update');
});

Route::apiResource('todo-list', ToDoListController::class);

Route::controller(MeetingController::class)->prefix('meeting')->name('meeting.')->group(function () {
    // Meeting API Routes New.
    Route::post('/{meeting}', 'update')->name('update');
    Route::post('status-update/{meeting}', 'statusUpdate')->name('status-update');
});
// Route::post('/meeting/{meeting}', [MeetingController::class, 'update'])->name('meeting.update');
Route::apiResource('meeting', MeetingController::class)->except('update');

Route::apiResource('reimbursement', ReimbursementController::class);

Route::apiResource('quote', QuoteController::class);

// Route::apiResource('employee-exit-process', EmployeeExitProcessController::class);

Route::group([],function () {
    Route::get('employee-exit-process', [EmployeeExitProcessController::class, 'index']);
    Route::get('employee-exit-process/{id}', [EmployeeExitProcessController::class, 'show']);
    Route::post('employee-exit-process', [EmployeeExitProcessController::class, 'store']);
    Route::put('employee-exit-process/{id}', [EmployeeExitProcessController::class, 'update']);
    Route::delete('employee-exit-process/{id}', [EmployeeExitProcessController::class, 'destroy']);
});

// id,emp_id,reason,initiated_by,initiated_by_id,approved_by_team_lead,
// approved_by_manager,approved_by_hr,approved_by_ceo,approved_by_client,
// replacement_requisition,knowledge_transfer,company_assets_recovery,payroll_and_benefits,
// exit_interview,documentation_fnf,feedback,communication,support_for_employee,added_by,status,
// revoke_status,revoke_by,notice_buy_back_status,notice_buy_back_amount,date,created_at,updated_at






