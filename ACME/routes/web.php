<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get("/planos",[planoController::class,'getPlanos']);
    Route::post("/planos",[planoController::class,'createPlano']);
});