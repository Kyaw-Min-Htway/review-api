<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;


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
Route::middleware('admin_auth')->group(function(){
    // login , register
Route::redirect('/','loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginpage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerpage');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin#dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

