<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnValue;

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
    // return view('welcome');
    return redirect()->route('books.index');
});


Route::resource('books', BookController::class);


Route::get('clear-cache', function () {
    Cache::flush();
    dd("Cache Clear Successfully!!!");
});
