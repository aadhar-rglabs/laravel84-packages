<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mail;
use File;
use JWTAuth;
use DateTime;
use Carbon\Carbon;
use GeoIP as GeoIP;
use App\Http\Requests;
use App\Helpers\Helpers;
use App\Mail\MyTestMailotp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\Todo;
use App\Models\Meeting;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreToDoListRequest;
use App\Http\Requests\UpdateToDoListRequest;
use App\Http\Resources\TodoResource;
use Illuminate\Support\Facades\Validator;
use App\Traits\AuthTrait;
use App\Traits\FilterTrait;

class MeetingController extends Controller
{
    
    // use AuthTrait, FilterTrait;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
