<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DataUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\UserController;
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

Route::get('/administrator/list-data', [AdminController::class, 'listData']);
Route::post('/administrator/add-data-user', [DataUserController::class, 'addUser']);
Route::post('/administrator/edit-data-user', [DataUserController::class, 'editUser']);

//User
Route::get('/', [UserController::class, 'index'])->name('dashboard');
Route::get('/categories', [UserController::class, 'categories']);
Route::get('/albums', [UserController::class, 'albums']);
Route::get('/artist', [UserController::class, 'artist']);
Route::get('/create', [UserController::class, 'create']);

Route::get('/login', [AuthController::class, 'index']);
Route::get('/signIn', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/post-register', [AuthController::class, 'postRegister']);
