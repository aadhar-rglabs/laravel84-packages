<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeExitProcessCompanyAssetsRecovery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('your_table_name', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_id')->nullable();
            $table->bigInteger('assignees')->nullable();
            $table->bigInteger('asset_id')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('date', 100)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
            $table->dateTime('deleted_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('your_table_name');
    }
}
