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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('batteries', 'BatteryController');

Route::resource('posts', 'PostController');

Route::resource('chipSets', 'ChipSetController');

Route::resource('bodyColors', 'BodyColorController');

Route::resource('nFCS', 'NFCController');

Route::resource('displayProtections', 'DisplayProtectionController');

Route::resource('featureMessages', 'FeatureMessageController');

Route::resource('mainCameras', 'MainCameraController');

Route::resource('oSS', 'OSController');

Route::resource('uIS', 'UIController');