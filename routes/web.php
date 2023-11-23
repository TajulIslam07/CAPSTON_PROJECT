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
Route::get('/home',[HomeController::class,'redirect'])  ;

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
Route::post('/appoinment',[HomeController::class,'appoinmenta']);
Route::get('/make_appointment',[HomeController::class,'makeappoinment']);
Route::get('/myappoinment',[HomeController::class,'myappoinment']);
Route::get('/doctor',[HomeController::class,'doctor']);
Route::get('/cancelappoinment/{id}',[HomeController::class,'cancelappoinment']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancel/{id}',[AdminController::class,'cancel']);
Route::get('/all_doctor',[AdminController::class,'alldoctor']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
Route::get('/update/{id}',[AdminController::class,'update']);
Route::post('/editdoctor/{id}',[AdminController::class,'edit']);

Route::get('/blood_bank',[HomeController::class,'bloodbank']);
Route::get('/donate_blood',[HomeController::class,'blooddonate']);
Route::post('/form_req',[HomeController::class,'form']);
Route::get('/search_blood',[HomeController::class,'srch']);





