<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/home',[ApiController::class,'homeScreen']);
Route::get('/about',[ApiController::class,'aboutScreen']);
Route::get('/news',[ApiController::class,'newsScreen']);
Route::get('/news/{id}',[ApiController::class,'getnewsDetails']);
Route::get('/team',[ApiController::class,'teamScreen']);
Route::get('/team/{id}',[ApiController::class,'getteamDetails']);
Route::get('/subsidiaries',[ApiController::class,'subsidiariesScreen']);
Route::get('/subsidiaries/{id}',[ApiController::class,'getsubsidiariesDetails']);
Route::get('/contactus',[ApiController::class,'contactScreen']);


Route::post('/subscribe',[ApiController::class,'subscribe']);
Route::post('/enquiry',[ApiController::class,'enquiry']);
Route::post('/contact',[ApiController::class,'contactus']);
Route::post('/quote',[ApiController::class,'quote']);

Route::post('/careers',[ApiController::class,'careers']);