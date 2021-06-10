<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LatihanController;

use App\Http\Controllers\BelajarController;

use App\Http\Controllers\ResourceController;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\TeacherController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\Home;


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

Route::get('/', [Home::class, 'home']);

Route::view('/latihan-route-view', 'create');

Route::get('/latihan/{id}/{id1}', [LatihanController::class, 'index']);

Route::get('/latihan/create', [LatihanController::class, 'create'])->name('create');

Route::post('/latihan/store', [LatihanController::class, 'store'])->name('store');

Route::put('/latihan/update', [LatihanController::class, 'update']);

Route::delete('/latihan/delete', [LatihanController::class, 'delete']);

Route::get('/tes/{nama}/{ttl}', [LatihanController::class, 'tes'])->name('tes.get');

Route::get('/belajar', [BelajarController::class, 'store']);

Route::resource('/resource-controller', ResourceController::class);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/teacher', [TeacherController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

// Elearning :

// - 

// - Bootstrap

// - 

// Company Profile :

// - KAI

// - BUMN

// - Telkom Indonesia

// Social Media :

// - WA

// - Discord

// -

// Blog :

// - Widya Edu

// - dewaweb

// - Sribu CORNER

// Landing Page :

// - docspo

// - loops

// - Geneva

// News :

// - javatpoint

// -

// -

// Ecommerce :

// -

// -

// -

// Market Place :

// -
