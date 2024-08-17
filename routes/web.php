<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
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


Route::get('/', [JobController::class, 'index'])->name('index');
// login routes
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/signup', 'AdminController@signup')->name('signup');

// authenticated  routes
Route::middleware(['web', 'auth:admins'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    //category routes
    Route::get('/category', [CategoryController::class, 'showcategory'])->name('showcategory');
    Route::post('/category', [CategoryController::class, 'addcategory'])->name('addcategory');
    Route::get('/editcategory/{id}', [CategoryController::class, 'editcategory'])->name('editcategory');
    Route::post('/updatecategory/{id}', [CategoryController::class, 'updatecategory'])->name('updatecategory');
    Route::get('/dltcategory/{id}', [CategoryController::class, 'dltcategory'])->name('dltcategory');
    // jobs routes
    Route::get('/jobs', [JobController::class, 'showjobs'])->name('showjobs');
    Route::get('/addjob', [JobController::class, 'addjob'])->name('addjob');
    Route::post('/addjob', [JobController::class, 'insertjob'])->name('insertjob');
    Route::get('editjob/{id}', [JobController::class, 'editjob'])->name('editjob');
    Route::post('/updatejob/{id}', [JobController::class, 'updatejob'])->name('updatejob');
    Route::get('/dltjob/{id}', [JobController::class, 'dltjob'])->name('dltjob');


    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

// user 
Route::get('/morejobs', [JobController::class, 'morejobs'])->name('morejobs');
Route::get('/apply{id}', [JobController::class, 'apply'])->name('apply');