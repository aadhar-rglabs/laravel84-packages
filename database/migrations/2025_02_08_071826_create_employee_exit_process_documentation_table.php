<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeExitProcessDocumentationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_exit_process_documentation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('emp_id')->nullable();
            $table->string('document', 255)->nullable();
            $table->string('resignation_letter', 255)->nullable();
            $table->string('offer_letter', 255)->nullable();
            $table->string('appointment_letter', 255)->nullable();
            $table->string('employee_provident_fund', 255)->nullable();
            $table->string('clearance_certificate', 255)->nullable();
            $table->string('confirmation_letter', 255)->nullable();
            $table->string('salary_slip', 255)->nullable();
            $table->string('full_and_final_settlement_letter', 255)->nullable();
            $table->bigInteger('added_by')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('date', 100)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_exit_process_documentation');
    }
}
