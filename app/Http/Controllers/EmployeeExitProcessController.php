<?php

namespace App\Http\Controllers;

use App\Models\EmployeeExitProcess;
use App\Http\Requests\StoreEmployeeExitProcessRequest;
use App\Http\Requests\UpdateEmployeeExitProcessRequest;
use Illuminate\Http\Request;

class EmployeeExitProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmployeeExitProcess::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeExitProcessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeExitProcessRequest $request)
    {
        $employeeExitProcess = EmployeeExitProcess::create($request->all());
        return response()->json($employeeExitProcess, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeExitProcess  $employeeExitProcess
     * @return \Illuminate\Http\Response
     */
    // public function show(EmployeeExitProcess $employeeExitProcess)
    // {
    //     //
    // }
    public function show($id)
    {
        return EmployeeExitProcess::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeExitProcessRequest  $request
     * @param  \App\Models\EmployeeExitProcess  $employeeExitProcess
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeExitProcessRequest $request, $id)
    {
        $employeeExitProcess = EmployeeExitProcess::findOrFail($id);
        $employeeExitProcess->update($request->all());
        return response()->json($employeeExitProcess, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeExitProcess  $employeeExitProcess
     * @return \Illuminate\Http\Response
     */
    // public function destroy(EmployeeExitProcess $employeeExitProcess)
    // {
    //     //
    // }
    public function destroy($id)
    {
        EmployeeExitProcess::destroy($id);
        return response()->json(null, 204);
    }
}
