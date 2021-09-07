<?php

use App\Http\Controllers\CommenteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SesstionController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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


Route::resource('post',PostController::class);
Route::resource('image',PostController::class);
Route::resource('slider',SliderController::class);

Route::resource('sesstion',SesstionController::class);




// Route::middleware('isAdmin')->group(function(){

//     Route::resource('/comment',CommenteController::class)->middleware('chaek');

// });


// Route::middleware('isAdmin','chaek')->group(function(){

//     Route::resource('/comment',CommenteController::class);

// });

Route::resource('comment',CommenteController::class)->middleware('isAdmin:admin,manage');













