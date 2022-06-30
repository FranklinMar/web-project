<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SignInController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [GeneralController::class, 'welcome']);
Route::get('/home', [GeneralController::class, 'welcome']);
Route::get('/welcome', [GeneralController::class, 'welcome']);

Route::get('/shop', [GeneralController::class, 'shop']);
Route::get('/store', [GeneralController::class, 'shop']);

Route::get('/aboutus', [GeneralController::class, 'aboutus']);

Route::get('/login', [SignInController::class, 'login'])->name('login');
Route::get('/signup', [SignInController::class, 'signup'])->name('signup');

// Route::get('/');