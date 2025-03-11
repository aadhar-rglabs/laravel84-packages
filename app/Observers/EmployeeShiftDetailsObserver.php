<?php

namespace App\Observers;

use App\Models\EmployeeShiftDetails;

class EmployeeShiftDetailsObserver
{
    /**
     * Handle the EmployeeShiftDetails "created" event.
     *
     * @param  \App\Models\EmployeeShiftDetails  $employeeShiftDetails
     * @return void
     */
    public function created(EmployeeShiftDetails $employeeShiftDetails)
    {
        //
    }

    /**
     * Handle the EmployeeShiftDetails "updated" event.
     *
     * @param  \App\Models\EmployeeShiftDetails  $employeeShiftDetails
     * @return void
     */
    public function updated(EmployeeShiftDetails $employeeShiftDetails)
    {
        //
    }

    /**
     * Handle the EmployeeShiftDetails "deleted" event.
     *
     * @param  \App\Models\EmployeeShiftDetails  $employeeShiftDetails
     * @return void
     */
    public function deleted(EmployeeShiftDetails $employeeShiftDetails)
    {
        //
    }

    /**
     * Handle the EmployeeShiftDetails "restored" event.
     *
     * @param  \App\Models\EmployeeShiftDetails  $employeeShiftDetails
     * @return void
     */
    public function restored(EmployeeShiftDetails $employeeShiftDetails)
    {
        //
    }

    /**
     * Handle the EmployeeShiftDetails "force deleted" event.
     *
     * @param  \App\Models\EmployeeShiftDetails  $employeeShiftDetails
     * @return void
     */
    public function forceDeleted(EmployeeShiftDetails $employeeShiftDetails)
    {
        //
    }
}
