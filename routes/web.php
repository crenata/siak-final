<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
    return view('welcome');
})->name("home");

Auth::routes();

Route::middleware(["auth", "verified"])->group(function () {
        Route::get("dashboard", [\App\Http\Controllers\User\DashboardController::class, "index"])->name("dashboard");
    Route::resource("profile", \App\Http\Controllers\User\ProfileController::class);
    Route::resource("academic", \App\Http\Controllers\User\AcademicController::class);
    Route::resource("payment", \App\Http\Controllers\User\PaymentController::class);
    Route::resource("change-password", \App\Http\Controllers\User\ChangePasswordController::class);
});
Route::prefix("admin")->group(function () {
    Route::get("/", [\App\Http\Controllers\Auth\LoginController::class, "showLoginFormAdmin"])->name("admin.login");
    Route::post("/", [\App\Http\Controllers\Auth\LoginController::class, "loginAdmin"]);
    Route::middleware("auth:admin")->group(function () {
        Route::get("dashboard", [\App\Http\Controllers\Admin\DashboardController::class, "index"])->name("admin.dashboard");
        Route::resource("user", \App\Http\Controllers\Admin\UserController::class);
    });
});
