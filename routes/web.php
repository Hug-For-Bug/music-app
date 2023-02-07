<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Admin
Route::get('/administrator', [AdminController::class, 'index']);
Route::get('/administrator/list-admin', [AdminController::class, 'listAdmin']);
Route::get('/administrator/list-user', [AdminController::class, 'listUser']);

//User
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/categories', [DashboardController::class, 'categories']);
Route::get('/albums', [DashboardController::class, 'albums']);
Route::get('/artist', [DashboardController::class, 'artist']);
Route::get('/create', [DashboardController::class, 'create']);

Route::get('/login', [AuthController::class, 'index']);
Route::get('/signIn', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/postRegister', [AuthController::class, 'postRegister']);
