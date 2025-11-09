<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

// admin
// Route::get('/', function () {
//     return view('/admin/pages/dashboard');
// });
Route::get('/teacher', function () {
    return view('/admin/pages/teacher');
})->name('admin.teacher');

// siswa
Route::get('/', function () {
    return view('/Siswa/pages/dashboard');
})->name('siswa.dashboard');


Route::get('/biodata', [BiodataController::class, 'index']);
Route::post('/biodata', [BiodataController::class, 'store']);
