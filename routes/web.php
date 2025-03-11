<?php

use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Route;
use Aadhar\Greeting\Greet;
use Aadhar\Math\Math;
use Aadha\LaravelImagick\ImagickService;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('code', [CodeController::class, 'index']);

// fibonacci sequence route
Route::get('fibonacci/{num}', [CodeController::class, 'fibonacci']);

// triangular sequence route
Route::get('triangular/{num}', [CodeController::class, 'triangular']);

// prime 
Route::get('prime/{one}/{two}', [CodeController::class, 'prime']);


Route::get('users/{id}', function ($id) {
    
});

// Greet route
Route::get('/greet/{name}', function ($name) {
    return Greet::sayHello($name);
});

// Math route
Route::get('/math/{num}', function ($num) {
    $fibonacci = Math::fibonacci($num);
    $isPrime = Math::isPrime($num);
    echo "fibonacci: " . $fibonacci;
    echo "<hr />";
    echo "isPrime: " . $isPrime;
    // echo Greet::sayHello($name = "John");
    exit("done");
});


Route::get('/process-image/{path}', function ($path) {
    $imagickService = app('imagick');
    $image = $imagickService->processImage($path);
    return response()->make($image->getImageBlob(), 200, ['Content-Type' => $image->getImageMimeType()]);
});