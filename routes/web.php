<?php

use App\Models\Skills;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// DASHBOARD

Route::resource('/portfolio', ProjectController::class)->middleware('auth');


Route::get('/404', function () {
  return view('dashboard/404');
});

Route::get('/blank', function () {
  return view('dashboard/blank');
});
Route::get('/buttons', function () {
  return view('dashboard/buttons');
});
Route::get('/cards', function () {
  return view('dashboard/cards');
});
Route::get('/charts', function () {
  return view('dashboard/charts');
});
Route::get('/tables', function () {
  return view('dashboard/tables');
});
Route::get('/utilities-animation', function () {
  return view('dashboard/utilities-animation');
});
Route::get('/utilities-border', function () {
  return view('dashboard/utilities-border');
});
Route::get('/utilities-color', function () {
  return view('dashboard/utilities-color');
});
Route::get('/utilities-other', function () {
  return view('dashboard/utilities-other');
});






Route::get('/forgot-password', function () {
  return view('forgot-password');
});
Route::resource('/register', RegisterController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
  return view('dashboard.index');
})->middleware('auth');
