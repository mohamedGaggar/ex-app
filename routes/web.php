<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\stripeController;
use App\Http\Controllers\profileController;
use GuzzleHttp\Middleware;

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


Route::get('register', [registerController::class, 'index']);
Route::post('register', [registerController::class, 'register']);

Route::get('login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);


Route::get('/adminLogin', [adminController::class, 'index']);
Route::post('/adminLogin', [adminController::class, 'adminLogin'])->name('ad');

Route::get('adminPage', [adminController::class, 'adminIndex'])->name('adminPage');
Route::put('adminPage', [adminController::class, 'create'])->name('admin.create');

Route::post('home', [homeController::class, 'homePost'])->name('home.page');


route::get('cart',[cartController::class,'index'])->middleware('auth')->name('cart');
route::post('cart',[stripeController::class,'checkout'])->name('cart.create');

    Route::get('home', [homeController::class, 'index'])->middleware('auth')->name('home');
route::get('success',[stripeController::class,'success'])->name('success');

Route::get('cancel', [stripeController::class, 'cancel'])->name('cancel');

Route::get('/checkout/cancel', [stripeController::class, 'cancel'])->name('checkout.cancel');

route::get('profile',[profileController::class,'index'])->middleware('auth')->name('profile');

route::get('/logout',[profileController::class,'logout'])->name('logout');
Route::get('/search', [homeController::class, 'search'])->name('search');
