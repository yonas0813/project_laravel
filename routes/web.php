<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginUserController;

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

Route::get('/profil1', function () {
    return view('profil1');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/loginuser', [LoginUserController::class, 'loginuser'])->name('loginuser');
Route::post('actionlogin1', [LoginUserController::class, 'actionlogin1'])->name('actionlogin1');
Route::post('actionlogout1', [LoginUserController::class, 'actionlogout1'])->name('actionlogout1');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/process', [RegisterController::class, 'process'])->name('process');

Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
Route::get('/tambahprofil', [ProfileController::class, 'tambahprofil'])->name('tambahprofil');
Route::post('/insertdata1', [ProfileController::class, 'insertdata1'])->name('insertdata1');
Route::get('/ubahprofil/{id_profil}', [ProfileController::class, 'ubahprofil'])->name('ubahprofil');
Route::post('/updatedata1/{id_profil}', [ProfileController::class, 'updatedata1'])->name('updatedata1');
Route::get('/deleteprofil/{id_profil}', [ProfileController::class, 'deleteprofil'])->name('deleteprofil');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahadmin');
Route::post('/insertdata', [AdminController::class, 'insertdata'])->name('insertdata');
Route::get('/ubahadmin/{id_admin}', [AdminController::class, 'ubahadmin'])->name('ubahadmin');
Route::post('/updatedata/{id_admin}', [AdminController::class, 'updatedata'])->name('updatedata');
Route::get('/deleteadmin/{id_admin}', [AdminController::class, 'deleteadmin'])->name('deleteadmin');
