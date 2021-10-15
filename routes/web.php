<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\BookController;


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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/test', function () {
    return view('test');
}); */
Route::get('/jesais/test2', function () {
    return view('test2');
});

Route::get('/test', [NavController::class, 'nav']);

//Route::get('/test', 'app\Http\Controllers\navControllers::nav');

Route::get('/list', [BookController::class, 'bookList']);
