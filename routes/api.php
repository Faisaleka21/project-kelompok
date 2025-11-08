<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\Api\BiodataApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/biodata', BiodataApiController::class);


