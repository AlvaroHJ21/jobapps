<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "store"])->name("login.store");

Route::middleware("auth")->group(function () {
    Route::delete('/logout', [LoginController::class, "destroy"])->name("login.destroy");

    Route::get('/', function () {
        return redirect()->route("applications.index");
    });
    Route::resource('applications', ApplicationController::class);
    Route::get("applications/{application}/change-active", [ApplicationController::class, "changeActive"])->name("applications.change-active");
    Route::resource('platforms', PlatformController::class);
});
