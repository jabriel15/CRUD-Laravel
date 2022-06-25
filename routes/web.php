<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [siswaController::class,'index']);
Route::get('/create', [siswaController::class,'create']);
Route::post('/store', [siswaController::class,'store']);
Route::get('/show/{id}', [siswaController::class,'show']);
Route::post('/update/{id}', [siswaController::class,'update']);
Route::get('/destroy/{id}', [siswaController::class,'destroy']);