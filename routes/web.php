<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/admin/pages/dashboard');
});
Route::get('/teacher', function () {
    return view('/admin/pages/teacher');
})->name('admin.teacher');

Route::get('/biodata', [BiodataController::class, 'index']);
Route::post('/biodata', [BiodataController::class, 'store']);
