<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HPController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HPController::class, 'index']);

// トップページ
Route::get('/hp', [HPController::class, 'index'])->name('hp.index');

// menuページ
Route::get('/hp/menu', [HPController::class, 'menu'])->name('hp.menu.index');

// staffページ
Route::get('hp/staff', [HPController::class, 'staff'])->name('hp.staff.index');

/*
Route::resource('hp', HPController::class);
*/

// adminトップページ
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');

// admin画像一覧ページ
Route::get('/admin/list', [App\Http\Controllers\HomeController::class, 'list'])->name('admin.list.index');

// admin画像登録ページ
Route::get('/admin/registration', [App\Http\Controllers\HomeController::class, 'registration'])->name('admin.registration.index');

