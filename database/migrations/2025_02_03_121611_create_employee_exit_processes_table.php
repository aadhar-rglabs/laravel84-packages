<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeExitProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_exit_process', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('emp_id')->nullable();
            $table->text('reason')->nullable();
            $table->tinyInteger('initiated_by')->default(1)->comment('1 => Employee, 2 => HR');
            $table->bigInteger('initiated_by_id')->nullable();
            $table->tinyInteger('approved_by_team_lead')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => revoked, 5 => rejected');
            $table->tinyInteger('approved_by_manager')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => revoked, 5 => rejected');
            $table->tinyInteger('approved_by_hr')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => revoked, 5 => rejected');
            $table->tinyInteger('approved_by_ceo')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => revoked, 5 => rejected');
            $table->tinyInteger('approved_by_client')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => revoked, 5 => rejected');
            $table->tinyInteger('replacement_requisition')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => rejected, 5 => done');
            $table->tinyInteger('knowledge_transfer')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => rejected, 5 => done');
            $table->tinyInteger('company_assets_recovery')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => rejected, 5 => done');
            $table->tinyInteger('payroll_and_benefits')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => In Process, 5 => rejected, 6 => done');
            $table->tinyInteger('exit_interview')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => In Process, 5 => rejected, 6 => done');
            $table->tinyInteger('documentation_fnf')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => In Process, 5 => rejected, 6 => done');
            $table->tinyInteger('feedback')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => In Process, 5 => rejected, 6 => done');
            $table->tinyInteger('communication')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => In Process, 5 => rejected, 6 => done');
            $table->tinyInteger('support_for_employee')->nullable()->comment('1 => initiated, 2 => approved, 3 => pending, 4 => In Process, 5 => rejected, 6 => done');
            $table->bigInteger('added_by')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0 => Not Revoked, 1 => Revoked');
            $table->tinyInteger('revoke_status')->default(0);
            $table->integer('revoke_by')->default(1)->comment('1 => HR');
            $table->tinyInteger('notice_buy_back_status')->default(1)->comment('1 => Notice Buy Back | 1 => Yes, 2 => No');
            $table->double('notice_buy_back_amount', 50, 4)->default(0.0000);
            $table->string('date', 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('dated_at')->useCurrent();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_exit_process');
    }
}
