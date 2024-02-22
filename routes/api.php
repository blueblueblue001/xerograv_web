<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DivelogController;
use App\Http\Controllers\Api\DIvelogLikeController;

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

// 🔽 追加
Route::post('/register', [AuthController::class, 'register']);
// 🔽 追加
Route::post('/login', [AuthController::class, 'login']);
// 🔽 追加
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 🔽 追加
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('divelogs', DivelogController::class);
      // 🔽 2 行追加
Route::post('/divelogs/{divelog}/like', [DivelogLikeController::class, 'store']);
Route::delete('/divelogs/{divelog}/like', [DivelogLikeController::class, 'destroy']);
  });