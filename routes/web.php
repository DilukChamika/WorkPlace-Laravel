<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompanyController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', [GuestController::class, 'login'])->name('login');
Route::get('/AccType', [GuestController::class, 'selectAccType'])->name('selectAccType');
Route::get('/CreateCompanyAcc', [GuestController::class, 'createComAcc'])->name('createComAcc');
Route::get('/CreateStudentAcc', [GuestController::class, 'createStuAcc'])->name('createStuAcc');
Route::post('/storeStuData', [GuestController::class, 'CreateNewStudent']);
Route::post('/storeComData', [GuestController::class, 'CreateNewCompany']);
Route::post('/logincheck',[GuestController::class, 'LoginCheck'] );


Route::prefix('Company')->name('Company.')->group(function(){
    Route::middleware(['auth:company'])->group(function(){
        Route::view('/home', 'Company.home')->name('home');
        Route::get('/logout', [CompanyController::class, 'logout'])->name('logout');
    });
});

Route::prefix('Student')->name('Student.')->group(function(){
    Route::middleware(['auth:student'])->group(function(){
        Route::view('/home', 'Student.home')->name('home');
        Route::get('/logout', [StudentController::class, 'logout'])->name('logout');
    });
});