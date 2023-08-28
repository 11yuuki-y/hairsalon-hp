<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpController;
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

Route::get('/', [HpController::class, 'index']);

// トップページ
Route::get('/hp', [HpController::class, 'index'])->name('hp.index');

// menuページ
Route::get('/hp/menu', [HpController::class, 'menu'])->name('hp.menu.index');

// staffページ
Route::get('hp/staff', [HpController::class, 'staff'])->name('hp.staff.index');

/*
Route::resource('hp', HpController::class);
*/

// adminトップページ
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');

// admin stylegalleryページ
Route::get('/admin/stylegallery',[App\Http\Controllers\HomeController::class, 'stylegallery'])->name('admin.stylegallery.index');

// admin conceptページ
Route::get('/admin/concept', [App\Http\Controllers\HomeController::class, 'concept'])->name('admin.concept.index');

// admin画像登録ページ
Route::get('/admin/registration', [App\Http\Controllers\HomeController::class, 'registration'])->name('admin.registration.index');

// 編集ボタンを押した際にadmin stylegalleryページから表示したと判別する為のURL
Route::post('/admin/stylegallery/store', [App\Http\Controllers\HomeController::class, 'stylegallerystore'])->name('admin.stylegallery.store');

// 編集ボタンを押した際にadmin conceptページから表示したと判別する為のURL
Route::post('/admin/concept/store', [App\Http\Controllers\HomeController::class, 'conceptstore'])->name('admin.concept.store');