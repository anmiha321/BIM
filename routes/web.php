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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ProfileController::class, 'index']);
});

Auth::routes();
Route::resource('users', UserController::class);
Route::get('/home', [ProfileController::class, 'index'])->name('profile');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/data-company', [ProfileController::class, 'data_company'])->name('data_company');
Route::get('/new-user', [UserController::class, 'newuser'])->name('new-user');
Route::get('/edit_user/{id}', [UserController::class, 'edit'])->name('edit_user');
Route::get('fetchprofile', [ProfileController::class, 'fetchprofile'])->name('fetchprofile');
Route::get('fetchcompany', [ProfileController::class, 'fetchcompany'])->name('fetchcompany');
Route::get('fullinfo', [ProfileController::class, 'fullinfo'])->name('fullinfo');
Route::get('search', [UserController::class, 'search'])->name('search');
Route::get('archive', [UserController::class, 'archive'])->name('archive');
Route::post('update_profile/{id}', [ProfileController::class, 'update']);
Route::post('update_password_profile/{id}', [ProfileController::class, 'updatepasswordprofile']);
Route::post('update_password/{id}', [UserController::class, 'updatepassword']);
Route::post('update_user/{id}', [UserController::class, 'update']);
Route::post('create_and_update_company', [ProfileController::class, 'CreateAndUpdateCompany']);
Route::delete('delete_user/{id}', [UserController::class, 'destroy']);
Route::get('return_user/{id}', [UserController::class, 'restore']);
