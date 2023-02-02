<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/peserta', [EmployeeController::class, 'index'])->name('pegawai');

Route::get('/login', [LoginController::class, 'login'])->name('login');

//untuk menampilkan form register
Route::get('/register', [LoginController::class, 'register'])->name('register');

//root untuk menyimpan data registrasi baru
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
