<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PlatformController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ApplicationController::class, 'index']);
Route::resource('applications', ApplicationController::class);

Route::resource('platforms', PlatformController::class);

