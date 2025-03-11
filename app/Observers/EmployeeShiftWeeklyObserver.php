<?php

namespace App\Observers;

use App\Models\EmployeeShiftWeekly;

class EmployeeShiftWeeklyObserver
{
    /**
     * Handle the EmployeeShiftWeekly "created" event.
     *
     * @param  \App\Models\EmployeeShiftWeekly  $employeeShiftWeekly
     * @return void
     */
    public function created(EmployeeShiftWeekly $employeeShiftWeekly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftWeekly "updated" event.
     *
     * @param  \App\Models\EmployeeShiftWeekly  $employeeShiftWeekly
     * @return void
     */
    public function updated(EmployeeShiftWeekly $employeeShiftWeekly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftWeekly "deleted" event.
     *
     * @param  \App\Models\EmployeeShiftWeekly  $employeeShiftWeekly
     * @return void
     */
    public function deleted(EmployeeShiftWeekly $employeeShiftWeekly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftWeekly "restored" event.
     *
     * @param  \App\Models\EmployeeShiftWeekly  $employeeShiftWeekly
     * @return void
     */
    public function restored(EmployeeShiftWeekly $employeeShiftWeekly)
    {
        //
    }

    /**
     * Handle the EmployeeShiftWeekly "force deleted" event.
     *
     * @param  \App\Models\EmployeeShiftWeekly  $employeeShiftWeekly
     * @return void
     */
    public function forceDeleted(EmployeeShiftWeekly $employeeShiftWeekly)
    {
        //
    }
}
