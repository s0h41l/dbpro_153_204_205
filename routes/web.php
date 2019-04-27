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

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('batteries', 'BatteryController');

//Route::resource('posts', 'PostController');

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

Route::resource('chipSets', 'ChipSetController');

Route::resource('chipSets', 'ChipSetController');

Route::resource('chipSets', 'ChipSetController');

Route::resource('chipsets', 'ChipsetController');

Route::resource('chipSets', 'ChipSetController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('devices', 'DeviceController');

Route::resource('devices', 'DeviceController');

Route::resource('devices', 'DeviceController');

Route::resource('twoGs', 'TwoGController');

Route::resource('threegs', 'ThreegController');

Route::resource('fourGs', 'FourGController');

Route::resource('displayExtraFeatures', 'DisplayExtraFeatureController');

Route::resource('sDS', 'SDController');

Route::get('client', function (){
    return "buzzz off mada paka";
});


Route::get('/',function (){
    return view('clientSide.index');
});


Route::get('/phone/{id}',function ($id){
    $results = DB::select( DB::raw("SELECT image_1,image_2,image_3,image_4,image_5,image_6,cover_image,price,device.description as description, battery.details AS battery_detail,battery.capacity as battery_capacity,brand.name as brand,built_in_memory.details as built_in_memory,chip_set.details as chipset,color.color as color,
connectivity_bluetooth.details as
 bluetooth,connectivity_gps.details as gps,connectivity_infrared.details as infrared,connectivity_data.details as data,
connectivity_nfc.details as nfc,connectivity_radio.details as radio,connectivity_usb.details as usb,connectivity_wlan.details as wlan,cpu.details as cpu,dimensions.details as dimensions,
display_extra_feature.details asextra_feature,display_protection.details as display_protecttion,
display_technology.details as display_technology,extra_feature.details as extra_feature,feature_browser.details as browser,feature_game.details as game,feature_message.details as message,
feature_sensor.details as sensor,feature_torch.details as torch,fourg.details as forurg,
frequency.details as frequency,main_camera.details as main_camera,os.details as os,screen_size.size as screen_szie,sd_card.details as sd_card,secondary_camera.details as secondary_camera,sim.details as sim,threeg.details as threeg,twog.details as twog,ui.details as ui,weight.weight as 
weight from device join battery on device.battery_id=battery.id join brand on brand.id=device.brand_id join built_in_memory on built_in_memory.id=device.built_in_memory_id join chip_set on chip_set.id=device.chip_set_id join color on 
color.id=device.color_id join connectivity_bluetooth on device.connectivity_bluetooth_id=connectivity_bluetooth.id join connectivity_data on connectivity_data.id=device.connectivity_data_id join
 connectivity_gps on device.connectivity_gps_id=connectivity_gps.id join connectivity_infrared on device.connectivity_infrared_id=connectivity_infrared.id join connectivity_nfc on connectivity_nfc.id=device.connectivity_nfc_id   
join connectivity_radio on connectivity_radio.id=device.connectivity_radio_id join connectivity_usb on connectivity_usb.id=device.connectivity_usb_id join
connectivity_wlan on device.connectivity_wlan_id=connectivity_wlan.id join cpu on cpu.id=device.cpu_id join dimensions on device.dimensions_id=dimensions.id
join display_extra_feature on display_extra_feature.id=device.display_extra_feature_id join display_protection on device.display_protection_id=display_protection.id
join display_technology on display_technology.id=device.display_technology_id join extra_feature on extra_feature.id=device.extra_feature_id 
join feature_browser on feature_browser.id=device.feature_browser_id join feature_game on device.feature_game_id=feature_game.id join feature_message on 
feature_message.id=device.feature_message_id join feature_sensor on feature_sensor.id=device.feature_sensor_id join feature_torch on feature_torch.id=device.feature_torch_id
join fourg on fourg.id=device.fourg_id join frequency on frequency.id=device.frequency_id join main_camera on main_camera.id=device.main_camera_id join os on os.id=device.os_id 
join screen_size on screen_size.id=device.screen_size_id join sd_card on sd_card.id=device.sd_card_id join secondary_camera on secondary_camera.id=device.secondary_camera_id 
join sim on sim.id=device.sim_id join threeg on threeg.id=device.threeg_id join twog on twog.id=device.twog_id join ui on ui.id=device.ui_id join weight on weight.id=device.weight_id where device.id='$id'") );

    return view('clientSide.phone')->with('device',$results);
});
