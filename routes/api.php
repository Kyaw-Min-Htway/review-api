<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
