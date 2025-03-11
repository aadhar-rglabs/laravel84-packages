<?php

namespace App\Observers;

use App\Models\EmployeeShiftMonthly;

class EmployeeShiftMonthlyObserver
{
    /**
     * Handle the EmployeeShiftMonthly "created" event.
     *
     * @param  \App\Models\EmployeeShiftMonthly  $employeeShiftMonthly
     * @return void
     */
    public function created(EmployeeShiftMonthly $employeeShiftMonthly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftMonthly "updated" event.
     *
     * @param  \App\Models\EmployeeShiftMonthly  $employeeShiftMonthly
     * @return void
     */
    public function updated(EmployeeShiftMonthly $employeeShiftMonthly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftMonthly "deleted" event.
     *
     * @param  \App\Models\EmployeeShiftMonthly  $employeeShiftMonthly
     * @return void
     */
    public function deleted(EmployeeShiftMonthly $employeeShiftMonthly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftMonthly "restored" event.
     *
     * @param  \App\Models\EmployeeShiftMonthly  $employeeShiftMonthly
     * @return void
     */
    public function restored(EmployeeShiftMonthly $employeeShiftMonthly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftMonthly "force deleted" event.
     *
     * @param  \App\Models\EmployeeShiftMonthly  $employeeShiftMonthly
     * @return void
     */
    public function forceDeleted(EmployeeShiftMonthly $employeeShiftMonthly)
    {
        //
    }
}
