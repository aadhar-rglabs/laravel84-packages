<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpFeedbackCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_feedback_collections', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id')->nullable();
            $table->text('feedback')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('emp_feedback_collections');
    }
}
