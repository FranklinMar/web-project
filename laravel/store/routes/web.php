<?php

// use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\ShopController;

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

Route::get('/aboutus', [GeneralController::class, 'aboutus']);

Route::get('/shop', [ShopController::class, 'shop']);
Route::get('/store', [ShopController::class, 'shop']);
Route::get('/shoppart', [ShopController::class, 'shop']);

Route::get('/game/{id}', [ShopController::class, 'game']);

Route::get('/login', [SignInController::class, 'login'])/*->name('login')*/;
Route::get('/signup', [SignInController::class, 'signup'])/*->name('signup')*/;
Route::get('/logout', [SignInController::class, 'logout']);

Route::post('/login/submit', [SignInController::class, 'loginPost']);
Route::post('/signup/submit', [SignInController::class, 'signupPost']);

// Route::post('/login/error', [SignInController::class, 'logError']);

// Route::get('/');