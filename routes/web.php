<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DataUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\SendEmailController;
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
Route::post('/administrator/delete-data-user', [DataUserController::class, 'deleteUser']);

//User
Route::get('/', [UserController::class, 'index'])->name('dashboard');
Route::get('/categories', [UserController::class, 'categories']);
Route::get('/albums', [UserController::class, 'albums']);
Route::get('/artist', [UserController::class, 'artist']);
Route::get('/create', [UserController::class, 'create']);
Route::get('/get-music', [UserController::class, 'getMusic']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/signIn', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/post-register', [AuthController::class, 'postRegister']);

Route::get('/sendEmail', [SendEmailController::class, 'index']);
