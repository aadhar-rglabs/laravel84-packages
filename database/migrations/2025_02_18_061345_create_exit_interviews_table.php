<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExitInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exit_interviews', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_exit_process_id')->nullable();
            $table->integer('emp_id')->nullable();
            $table->string('date')->nullable();
            $table->text('notes')->nullable();
            $table->integer('interviewer')->nullable();
            $table->integer('added_by')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 => Active, 0 => Inactive')->nullable();
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
        Schema::dropIfExists('exit_interviews');
    }
}
