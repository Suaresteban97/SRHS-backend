<?php

//Controllers
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"]);

Route::get('/login', [LoginController::class, "login"]);
Route::get('/logout', [LoginController::class, "logout"]);

Route::prefix("api")->group(function () {
    Route::get('/get', [ApiController::class, "get"]);
    Route::get('/post', [ApiController::class, "post"]);
    Route::get('/put', [ApiController::class, "put"]);
    Route::get('/delete', [ApiController::class, "delete"]);
});

//Revisar si habrá ingreso sino sin middleware

Route::middleware(["login", "langcookie"])->group(function() {

    //Dashboard

});

Route::get("lang/{locale}", function ($locale) {
    return redirect()->back()->withCookie("locale", $locale);
});