<?php

use App\Http\Controllers\GroupController;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::post('/students', [StudentController::class,'index']);
Route::post('/student', [StudentController::class,'show']);
Route::post('/create_student', [StudentController::class,'store']);
Route::post('/edit_student', [StudentController::class,'update']);
Route::post('/delete_student', [StudentController::class,'destroy']);

Route::post('/groups', [GroupController::class,'index']);
Route::post('/group', [StudentController::class,'show']);
Route::post('/create_group', [StudentController::class,'store']);
Route::post('/edit_group', [StudentController::class,'update']);
Route::post('/delete_group', [StudentController::class,'destroy']);