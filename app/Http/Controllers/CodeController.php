<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Aadhar\LaravelImagick\ImagickService;


class CodeController extends Controller
{
    
    protected $imagickService;

    public function __construct(ImagickService $imagickService)
    {
        $this->imagickService = $imagickService;
    }


    public function processImage($path)
    {
        $image = $this->imagickService->processImage($path);
        return response()->make($image->getImageBlob(), 200, ['Content-Type' => $image->getImageMimeType()]);
    }


    // use AuthTrait, FilterTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  int  $num
     * @return \Illuminate\Http\Response
     */
    public static function fibonacci($num)
    {
        if($num == 0) {
            return 0;
        } elseif ($num == 1) {
            return 1;
        } else {
            return self::fibonacci($num - 1) + self::fibonacci($num - 2);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $num
     * @return \Illuminate\Http\Response
     */
    public static function triangular($num)
    {
        if($num == 0) {
            return 0;
        } elseif ($num == 1) {
            return 0;
        } else {
            return self::triangular($num - 1) + ($num - 1);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $num
     * @return \Illuminate\Http\Response
     */
    public static function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $one
     * @param  int  $two
     * @return \Illuminate\Http\Response
     */
    public static function prime($one, $two)
    {
        $primes = [];
        for ($i = $one; $i <= $two; $i++) {
            if (self::isPrime($i)) {
                $primes[] = $i;
            }
        }
        return ($primes);
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
