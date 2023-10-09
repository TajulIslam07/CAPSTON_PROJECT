<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/add_doctor', function () {
    return view('admin.add_doctors');
});
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/appoinment',[HomeController::class,'appoinment']);
Route::get('/myappoinment',[HomeController::class,'myappoinment']);
Route::get('/cancelappoinment/{id}',[HomeController::class,'cancelappoinment']);
