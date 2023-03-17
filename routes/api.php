<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Constant\Endpoints;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('throttle')->group(function(){
    Route::post(Endpoints::USER_BALANCE_POST,Endpoints::USER_BALANCE_POST_ACTION)->name('user.balance');
    Route::post(Endpoints::USER_ADD_MONEY_POST,Endpoints::USER_ADD_MONEY_POST_ACTION)->name('user.add-money');
});
