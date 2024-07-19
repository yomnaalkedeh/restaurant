<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\dash\CategoryController;
use App\Http\Controllers\dash\MealController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/dashboard', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

//dashboard
Route::get('/dashboard/home', [HomeController::class, 'dashboard'])->name('dashboard');
Route::resource('/categories', CategoryController::class);
Route::resource('/meals', MealController::class);


//booking
Route::get('bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('bookings', [BookingController::class, 'store'])->name('bookings.store');

//addToCart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
//Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove/{meal}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::put('/cart/{meal}', [CartController::class, 'update'])->name('cart.update');



//Route::resource('/categories', CategoryController::class);
//Route::resource('/meals', MealController::class);

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//register
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
