<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Models\Lorgem;
use App\Http\Controllers\LorgemController;
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

Route::get('lorgems',[LorgemController::class,'index']);
Route::post('lorgems',[LorgemController::class,'store']);
Route::get('lorgems/{id}',[LorgemController::class,'show']);
Route::put('lorgems/{id}',[LorgemController::class,'update']);
Route::delete('lorgems/{id}',[LorgemController::class,'destroy']);

