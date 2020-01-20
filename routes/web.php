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

Route::get('/', 'BossController@index');
Route::get('/{boss}', 'BossController@bosses');

// Route::view('/', 'wrathion');
// Route::view('/maut', 'maut');
// Route::view('/prophet-skitra', 'skitra');
// Route::view('/dark-inquisitor-xanesh', 'inquisitor');
// Route::view('/hivemind', 'hivemind');
// Route::view('/shadhar-the-insatiable', 'shadhar');
// Route::view('/drestagath', 'drestagath');
// Route::view('/ilgynoth', 'ilgynoth');
// Route::view('/vexiona', 'vexiona');
// Route::view('/ra-den-the-despoiled', 'raden');
// Route::view('/carapace-of-nzoth', 'carapace');
// Route::view('/nzoth-the-corruptor', 'nzoth');

