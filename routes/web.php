<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [ProfileController::class, 'index'])->name('profile');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/new-user', [UserController::class, 'newuser'])->name('new-user');
Route::get('fetchprofile', [ProfileController::class, 'fetchprofile'])->name('fetchprofile');
Route::get('fullinfo', [ProfileController::class, 'fullinfo'])->name('fullinfo');
Route::get('search', [UserController::class, 'search'])->name('search');
Route::post('update_profile/{id}', [ProfileController::class, 'update']);
Route::post('update_password/{id}', [ProfileController::class, 'updatepassword']);
