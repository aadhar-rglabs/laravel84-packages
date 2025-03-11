<?php

namespace App\Http\Controllers;

use App\Models\Reimbursement;
use App\Http\Requests\StoreReimbursementRequest;
use App\Http\Requests\UpdateReimbursementRequest;
use Symfony\Component\HttpFoundation\Response;

class ReimbursementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReimbursementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReimbursementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reimbursement  $reimbursement
     * @return \Illuminate\Http\Response
     */
    public function show(Reimbursement $reimbursement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReimbursementRequest  $request
     * @param  \App\Models\Reimbursement  $reimbursement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReimbursementRequest $request, Reimbursement $reimbursement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reimbursement  $reimbursement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reimbursement $reimbursement)
    {
        //
    }
}
