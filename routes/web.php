<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Dashboard
Route::get('dashboard', function () {
    return view('pages.dashboard');
})->Name('dashboard');
//tables
Route::get('tables', function () {
    return view('pages.tables');
})->Name('tables');
//forms
Route::get('forms', function () {
    return view('pages.forms');
})->Name('forms');
//icon
Route::get('icon', function () {
    return view('pages.icon');
})->Name('icon');
//icon
Route::get('student', function () {
    return view('pages.student');
})->Name('student');
//icon
Route::get('subject', function () {
    return view('pages.subject');
})->Name('subject');
//icon
Route::get('login', function () {
    return view('pages.login');
})->Name('login');
//icon
Route::get('transcript', function () {
    return view('pages.transcript');
})->Name('transcript');
//icon
Route::get('class', function () {
    return view('pages.class');
})->Name('class');
//charts
Route::get('charts', function () {
    return view('pages.charts');
})->Name('charts');
Route::get('/', function () {
    return view('welcome');
});