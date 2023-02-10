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


    return view('/welcome');
});

Route::get('/peserta', [EmployeeController::class, 'index'])->name('peserta')->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprocess', [LoginController::class, 'loginprocess'])->name('loginprocess');

//untuk menampilkan form register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/getkota', [LoginController::class, 'getkota'])->name('getkota');
Route::post('/getperiode', [LoginController::class, 'getperiode'])->name('getperiode');

//root untuk menyimpan data registrasi baru
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/user', [LoginController::class, 'user'])->name('user');
Route::post('/usercreate', [LoginController::class, 'usercreate'])->name('usercreate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

#export PDF
Route::get('/exportpdf', [EmployeeController::class, 'exportpdf'])->name('exportpdf');

#export excel
Route::get('/exportexcel', [EmployeeController::class, 'exportexcel'])->name('exportexcel');


// Route::get('/peserta', [EmployeeController::class, 'jumlahpeserta'])->name('jumlahpeserta');
// Route::get('/peserta', [EmployeeController::class, 'jumlahpesertapria'])->name('jumlahpesertapria');
// Route::get('/peserta', [EmployeeController::class, 'jumlahpesertawanita'])->name('jumlahpesertawanita');
