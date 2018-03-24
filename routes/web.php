<?php

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/implementing_dashboard', function () {
    return view('implementing_dashboard');
});
Route::get('/nodal_dashboard', function () {
    return view('nodal_dashboard');
});
Route::get('/implementing_phase1', function () {
    return view('implementing_phase1');
});
Route::get('/implementing_phase2', function () {
    return view('implementing_phase2');
});
Route::get('/implementing_phase3', function () {
    return view('implementing_phase3');
});
Route::get('/nodal_phase1', function () {
    return view('nodal_phase1');
});
Route::get('/nodal_phase2', function () {
    return view('nodal_phase2');
});
Route::get('/nodal_phase3', function () {
    return view('nodal_phase3');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
