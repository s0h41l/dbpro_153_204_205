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

Route::resource('weights', 'WeightController');

Route::resource('sims', 'SimController');

Route::resource('extraFeatures', 'ExtraFeatureController');

Route::resource('mainMemories', 'MainMemoryController');

Route::resource('dimensions', 'DimensionController');

Route::resource('radios', 'RadioController');

Route::resource('gPSS', 'GPSController');

Route::resource('uSBS', 'USBController');

Route::resource('data', 'DataController');

Route::resource('infrareds', 'InfraredController');

Route::resource('cameraFeatures', 'CameraFeatureController');

Route::resource('frequencies', 'FrequencyController');

Route::resource('secondaryCameras', 'SecondaryCameraController');

Route::resource('featureSensors', 'FeatureSensorController');

Route::resource('torches', 'TorchController');

Route::resource('featureAudios', 'FeatureAudioController');

Route::resource('cPUS', 'CPUController');

Route::resource('builtInMemories', 'BuiltInMemoryController');

Route::resource('brands', 'BrandController');

Route::resource('batteries', 'BatterieController');

Route::resource('displayTechnologies', 'DisplayTechnologieController');

Route::resource('games', 'GameController');

Route::resource('browsers', 'BrowserController');

Route::resource('screenResolutions', 'ScreenResolutionController');

Route::resource('screenSizes', 'ScreenSizeController');

Route::resource('wlans', 'WlanController');

Route::resource('bluetooths', 'BluetoothController');