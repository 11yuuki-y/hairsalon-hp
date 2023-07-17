<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [indexController::class, 'index']);


// トップページ
Route::get('/hp', [indexController::class, 'index'])->name('hp.index');


// menuページ
Route::get('/hp/menu', [indexController::class, 'menu'])->name('hp.menu');

// staffページ
Route::get('hp/staff', [indexController::class, 'staff'])->name('hp.staff');

/*
Route::resource('hp', indexController::class);
*/
