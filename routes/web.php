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
Route::view('about', 'pages.about.index')->name('about');
Route::view('signeup', 'pages.signeup.index', compact('error'))->name('signeup');
Route::view('signein', 'pages.signein.index', compact('error'))->name('signein');
Route::view('courses', 'pages.courses.index')->name('courses');
Route::view('coursesSpa', 'pages.courses.spa.index')->name('coursesSpa');
Route::view('onepagesSpa', 'pages.courses.spa.pagesSpa.one')->name('onepagesSpa');
Route::view('twopagesSpa', 'pages.courses.spa.pagesSpa.two')->name('twopagesSpa');
Route::view('threepagesSpa', 'pages.courses.spa.pagesSpa.three')->name('threepagesSpa');
Route::view('fourpagesSpa', 'pages.courses.spa.pagesSpa.four')->name('fourpagesSpa');
Route::view('fivepagesSpa', 'pages.courses.spa.pagesSpa.five')->name('fivepagesSpa');
Route::view('sixpagesSpa', 'pages.courses.spa.pagesSpa.six')->name('sixpagesSpa');
Route::view('sevenpagesSpa', 'pages.courses.spa.pagesSpa.seven')->name('sevenpagesSpa');
Route::view('oneMainpagesSpa', 'pages.courses.spa.pagesSpa.oneMain')->name('oneMainpagesSpa');
Route::view('twoMainpagesSpa', 'pages.courses.spa.pagesSpa.twoMain')->name('twoMainpagesSpa');

Route::view('testing', 'pages.testing.index')->name('testing');
Route::view('testSpa', 'pages.testing.testSpa.index')->name('testSpa');

// Register
Route::get('deleteSession', [RegisterController::class, 'deleteSession'])->name('deleteSession');

Route::post('signeup', [RegisterController::class, 'SigneUP'])->name('SigneUP');
Route::post('signein', [RegisterController::class, 'SigneIN'])->name('SigneIN');

// Profile
Route::get('profile', [ProfileController::class, 'Profile'])->name('profile');
Route::get('editProfile', [ProfileController::class, 'DataProfile'])->name('editProfile');

Route::post('editProfile', [ProfileController::class, 'EditProfile'])->name('editProfile');
