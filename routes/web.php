<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Models\Detail;

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


Route::get('/',[DetailController::class,'index']);
Route::get('/{slug}',[DetailController::class,'show']);