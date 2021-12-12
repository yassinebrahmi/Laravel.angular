<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('diarys/store', [DiaryController::class, 'store']);
Route::get('diarys/show/{id}', [DiaryController::class, 'show']);
Route::put('diarys/update/{id}', [DiaryController::class, 'update']);
Route::get('diarys/index', [DiaryController::class, 'index']);
Route::get('main-diary', [DiaryController::class, 'diarymain']);