<?php

namespace App\Http\Controllers;

use App\Models\EmpFeedbackCollection;
use App\Http\Requests\StoreEmpFeedbackCollectionRequest;
use App\Http\Requests\UpdateEmpFeedbackCollectionRequest;

class EmpFeedbackCollectionController extends Controller
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
     * @param  \App\Http\Requests\StoreEmpFeedbackCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpFeedbackCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmpFeedbackCollection  $empFeedbackCollection
     * @return \Illuminate\Http\Response
     */
    public function show(EmpFeedbackCollection $empFeedbackCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpFeedbackCollectionRequest  $request
     * @param  \App\Models\EmpFeedbackCollection  $empFeedbackCollection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpFeedbackCollectionRequest $request, EmpFeedbackCollection $empFeedbackCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpFeedbackCollection  $empFeedbackCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpFeedbackCollection $empFeedbackCollection)
    {
        //
    }
}
