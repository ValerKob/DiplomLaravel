<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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

$error = 0;
Route::view('', 'pages.main.index')->name('main');

// Get
Route::get('info', [RegisterController::class, 'info'])->name('info');
Route::get('addData', [RegisterController::class, 'addData'])->name('addData');

// AddData
Route::post('FormAdd', [RegisterController::class, 'FormAdd'])->name('FormAdd');