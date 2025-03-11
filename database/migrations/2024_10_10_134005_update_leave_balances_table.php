<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLeaveBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // The "leave_balances" table exists and has an "to_employee" column...
        if (
            (!Schema::hasColumn('leave_balances', 'to_employee'))
            && (!Schema::hasColumn('leave_balances', 'leave_scope'))
            && (!Schema::hasColumn('leave_balances', 'month'))
        ) {
            Schema::table('leave_balances', function (Blueprint $table) {
                $table->tinyInteger('to_employee')->after('closing_balance')->comment('[1 => Yes, 2 => No]')->default(2)->nullable();
                $table->tinyInteger('leave_scope')->after('to_employee')->comment('[1 => Monthly, 2 => Yearly]')->default(2)->nullable();
                $table->string('month')->after('leave_scope')->comment('Month name i.e. jan, feb, march')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (
            (Schema::hasColumn('leave_balances', 'to_employee'))
            && (Schema::hasColumn('leave_balances', 'leave_scope'))
            && (Schema::hasColumn('leave_balances', 'month'))
        ) {
            Schema::table('leave_balances', function (Blueprint $table) {
                $table->dropColumn('to_employee');
                $table->dropColumn('leave_scope');
                $table->dropColumn('month');
            });
        }
    }
}
