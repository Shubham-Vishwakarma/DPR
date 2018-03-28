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


Auth::routes();

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

Route::get('/implementing_phase1', 'Phase1Controller@display')->name('implementing_phase1');
Route::post('/implementing_phase1', 'Phase1Controller@store');

Route::get('/implementing_phase2', 'Phase2Controller@display')->name('implementing_phase2');
Route::post('/implementing_phase2', 'Phase2Controller@store');

Route::get('/implementing_phase3', 'Phase3Controller@display')->name('implementing_phase3');
Route::post('/implementing_phase3', 'Phase3Controller@store');

Route::get('/nodal_phase1','Phase1Controller@displayNodal')->name('nodal_phase1');
Route::post('nodal_phase1','Phase1Controller@storeComments');

Route::get('/nodal_phase2','Phase2Controller@displayNodal')->name('nodal_phase2');
Route::post('/nodal_phase2','Phase2Controller@storeComments');

Route::get('/nodal_phase3','Phase3Controller@displayNodal')->name('nodal_phase3');

Route::get('/home', 'HomeController@index')->name('home');
