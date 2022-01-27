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
Route::post('add_file', [ProfileController::class, 'addfile']);
Route::get('/download_file/{file}', [ProfileController::class, 'downloadfile']);
Route::get('/downloadArchive',[ProfileController::class, 'downloadarchive'])->name('downloadarchive');
Route::delete('/deletefile/{id}',[ProfileController::class, 'deletefile'])->name('deletefile');
Route::delete('/delete_worker/{id}', [ProfileController::class, 'delete_worker'])->name('delete_worker');
Route::delete('/delete_worker_final/{id}', [ProfileController::class, 'delete_worker_final'])->name('delete_worker_final');
Route::get('/return_worker/{id}', [ProfileController::class, 'restore_archive_worker'])->name('restore_archive_worker');
Route::post('/create_worker',[ProfileController::class, 'create_worker'])->name('create_worker');
Route::get('/edit_worker/{id}', [ProfileController::class, 'edit_worker'])->name('edit_worker');
Route::post('/update_worker/{id}', [ProfileController::class, 'update_worker'])->name('update_worker');
Route::post('/create_article_mouth', [ProfileController::class, 'create_article_mouth'])->name('create_article_mouth');
Route::post('/update_article_mouth', [ProfileController::class, 'update_article_mouth'])->name('update_article_mouth');
Route::post('/create_article_ones', [ProfileController::class, 'create_article_ones'])->name('create_article_ones');
Route::post('/update_article_ones', [ProfileController::class, 'update_article_ones'])->name('update_article_ones');
Route::delete('/delete_article/{id}', [ProfileController::class, 'delete_article'])->name('delete_article');
Route::delete('delete_user/{id}', [UserController::class, 'destroy']);
Route::get('return_user/{id}', [UserController::class, 'restore']);
