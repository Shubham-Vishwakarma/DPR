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
    return view('home');
});


Route::get('/login','AuthController@showLogin')->name('login');
Route::post('/login','AuthController@login');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/nodal_dashboard', 'NodalController@displayDashboard')->name('nodal_dashboard');

Route::get('/create_project','ImplementingDashboard@create_project')->name('create_project');

Route::get('/implementing_phase1/{id}','Phase1Controller@display')->name('implementing_phase1');
Route::post('/implementing_phase1/{id}', 'Phase1Controller@store');
Route::post('/implementing_phase1_save/{id}', 'Phase1Controller@save')->name('implementing_phase1_save');

Route::get('/implementing_phase2/{id}', 'Phase2Controller@display')->name('implementing_phase2');
Route::post('/implementing_phase2/{id}', 'Phase2Controller@store');
//Route::post('/implementing_phase2/{id}', 'Phase2Controller@save')->name('implementing_phase2_save');

Route::get('/implementing_phase3/{id}', 'Phase3Controller@display')->name('implementing_phase3');
Route::post('/implementing_phase3/{id}', 'Phase3Controller@store');
//Route::post('/implementing_phase3/{id}', 'Phase3Controller@save')->name('implementing_phase3_save');

Route::get('/nodal_phase1/{id}','Phase1Controller@displayNodal')->name('nodal_phase1');
Route::post('/nodal_phase1/{id}','Phase1Controller@storeComments');
//Route::post('/nodal_phase1/{id}','Phase1Controller@saveComments')->name('nodal_phase1_save');

Route::get('/nodal_phase2/{id}','Phase2Controller@displayNodal')->name('nodal_phase2');
Route::post('/nodal_phase2/{id}','Phase2Controller@storeComments');
Route::post('/nodal_phase2/{id}','Phase2Controller@saveComments')->name('nodal_phase2_save');

Route::get('/nodal_phase3/{id}','Phase3Controller@displayNodal')->name('nodal_phase3');
Route::post('/nodal_phase3/{id}','Phase3Controller@storeComments');
Route::post('/nodal_phase3/{id}','Phase3Controller@saveComments')->name('nodal_phase3_save');



Route::get('/implementing_dashboard', 'ImplementingDashboard@getProject')->name('implementing_dashboard');

Route::get('/ocr', function () {
    return view('ocr');
});
