<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/', [BooksController::class,'index'])->name('index');
Route::match(['get','post'],'/addBookform', [BooksController::class,'addBookform'])->name('addBookform');
Route::view('/add', 'addBookform')->name('add');

Route::get('/edit/{id}', [BooksController::class,'edit'])->name('edit');
Route::match(['get','post'],'/editBook', [BooksController::class,'editBook'])->name('editBook');

Route::get('/deleteBook/{id}', [BooksController::class,'deleteBook'])->name('deleteBook');



