<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
      Route::get('home' , [UserController::class , 'index'])->name('home');
      Route::get('wallet' , [UserController::class , 'getWallet'])->name('wallet');
      Route::post('wallet' , [UserController::class , 'createWallet'])->name('wallet');

      Route::get('dettal' ,[UserController::class ,'detallWallet'])->name('detallWallet');

});
