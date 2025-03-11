<?php

namespace App\Http\Controllers;

use App\Models\ExitInterview;
use App\Http\Requests\StoreExitInterviewRequest;
use App\Http\Requests\UpdateExitInterviewRequest;

class ExitInterviewController extends Controller
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
     * @param  \App\Http\Requests\StoreExitInterviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExitInterviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExitInterview  $exitInterview
     * @return \Illuminate\Http\Response
     */
    public function show(ExitInterview $exitInterview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExitInterviewRequest  $request
     * @param  \App\Models\ExitInterview  $exitInterview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExitInterviewRequest $request, ExitInterview $exitInterview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExitInterview  $exitInterview
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExitInterview $exitInterview)
    {
        //
    }
}
