<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenjagaController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Route;

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

Auth::routes([
    'register' => false, //menghilangkan fitur register
    'reset' => false, //menghilangkakn fitur forgot
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => [
//     'auth',
//     'role:admin',
// ]], function(){
//     Route::get('/', function(){
//         return 'halaman admin';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile admin';
//     });

// });

// Route::group(['prefix' => 'pengguna', 'middleware' => [
//     'auth',
//     'role:pengguna',
// ]], function(){
//     Route::get('/', function(){
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile pengguna';
//     });

// });

// Route::group(['prefix' => 'pembelian', 'middleware' => [
//     'auth',
//     'role:admin|kasir',
// ]], function(){
//     Route::get('/', function(){
//         return 'halaman pembelian';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile pembelian';
//     });

// });
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('buku', BukuController::class)->middleware(['role:admin']);
    Route::resource('anggota', AnggotaController::class)->middleware(['role:admin']);
    Route::resource('pinjam', PinjamController::class)->middleware(['role:admin']);
    Route::resource('peminjaman', PeminjamanController::class)->middleware(['role:admin']);
    Route::resource('penjaga', PenjagaController::class)->middleware(['role:admin']);

});

// Route::get('/home', function () {
//     return view('frontend.home');
// })->name('home');
// Route::get('/about', function () {
//     return view('frontend.about');
// })->name('about');
// Route::get('/services', function () {
//     return view('frontend.services');
// })->name('services');
// Route::get('/books', function () {
//     return view('frontend.books');
// })->name('books');
// Route::get('/contact', function () {
//     return view('frontend.contact');
// })->name('contact');
// Route::get('/pulang', function () {
//     return view('frontend.pulang');
// })->name('pulang');
// Route::get('/perahu', function () {
//     return view('frontend.perahu');
// })->name('perahu');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
