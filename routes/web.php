<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\JenisSuratController;

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

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('loginpost');
Route::get('logout',[AuthController::class,'logout'])->name('logout');


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('tes');
});

Route::resource('surat', SuratController::class);
Route::get('/api/penduduk/search', [PendudukController::class, 'search']);
Route::get('/api/surat/get-form-tambahan', [JenisSuratController::class, 'getFormTambahan']);
// print surat keluar
Route::get('/print/surat/{id}', [SuratController::class, 'print'])->name('print.surat');

