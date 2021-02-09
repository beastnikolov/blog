<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ViewController;

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


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'storeUser']);
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('books', [BooksController::class, 'books'])->name('books');
Route::post('newPost', [PostController::class, 'post']);
Route::post('purchase', [PurchaseController::class, 'purchaseBook']);
Route::get('view/{id}', [ViewController::class, 'viewBook'])->name('view');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'sendForm']);
Route::get('orders', [OrdersController::class, 'orders'])->name('orders');