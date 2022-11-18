<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;


Route::get("/", [HomeController::class, "index"]);

Route::get("/users", [AdminController::class, "user"]);

Route::get("/foodmenu", [AdminController::class, "foodmenu"]);

Route::post("/uploadfood", [AdminController::class, "upload"]);

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

Route::get("/redirects", [HomeController::class, "redirects"]);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),
    'verified'])->group(function ()
{
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
