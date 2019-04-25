<?php

use Illuminate\Http\Request;
use Illuminate\App\Models\Device;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('chip_sets', 'ChipSetAPIController');

Route::get('os',function(){
   $os=\App\Models\OS::take(500)->get();
   return $os;
});

Route::get('ui',function(){
    $os=\App\Models\UI::take(500)->get();
    return $os;
});

Route::get('chipset',function(){
    $os=\App\Models\ChipSet::take(500)->get();
    return $os;
});
Route::get('nfc',function(){
    $os=\App\Models\NFC::take(500)->get();
    return $os;
});
Route::get('display_protection',function(){
    $os=\App\Models\DisplayProtection::take(500)->get();
    return $os;
});
Route::get('feature_message_field',function(){
    $os=\App\Models\FeatureMessage::take(500)->get();
    return $os;
});


Route::get('weights',function(){
    $os=\App\Models\Weight::take(500)->get();
    return $os;
});
Route::get('sims',function(){
    $os=\App\Models\Sim::take(500)->get();
    return $os;
});

Route::get('secondary_camera',function(){
    $os=\App\Models\SecondaryCamera::take(500)->get();
    return $os;
});


Route::get('dimension_field',function(){
    $dimension=\App\Models\Dimension::take(500)->get();
    return $dimension;
});


Route::get('weight_field',function (){
    $weights=\App\Models\Weight::take(500)->get();
    return $weights;
});

Route::get('sim_field',function (){
    $sim=\App\Models\Sim::take(500)->get();
    return $sim;
});


Route::get('color_field',function (){
    $sim=\App\Models\BodyColor::take(500)->get();
    return $sim;
});



Route::get('two_field',function (){
    $sim=\App\Models\TwoG::take(500)->get();
    return $sim;
});


Route::get('threeg_field',function (){
    $sim=\App\Models\Threeg::take(500)->get();
    return $sim;
});

Route::get('fourg_field',function (){
    $sim=\App\Models\FourG::take(500)->get();
    return $sim;
});


Route::get('cpu_field',function (){
    $sim=\App\Models\CPU::take(500)->get();
    return $sim;
});



Route::get('display_technology_field',function (){
    $sim=\App\Models\DisplayTechnologie::take(500)->get();
    return $sim;
});

Route::get('resolution_field',function (){
    $sim=\App\Models\ScreenResolution::take(500)->get();
    return $sim;
});


Route::get('screen_size_field',function (){
    $sim=\App\Models\ScreenSize::take(500)->get();
    return $sim;
});


Route::get('extra_feature_field',function (){
    $sim=\App\Models\ExtraFeature::take(500)->get();
    return $sim;
});

Route::get('built_in_memory_field',function (){
    $sim=\App\Models\BuiltInMemory::take(500)->get();
    return $sim;
});

Route::get('display_extra_feature_field',function (){
    $sim=\App\Models\DisplayExtraFeature::take(500)->get();
    return $sim;
});


Route::get('sd_card_field',function (){
    $sim=\App\Models\SD::take(500)->get();
    return $sim;
});


Route::get('main_camera_field',function (){
    $sim=\App\Models\MainCamera::take(500)->get();
    return $sim;
});

Route::get('camera_field',function (){
    $sim=\App\Models\SecondaryCamera::take(500)->get();
    return $sim;
});


Route::get('camera_feature_field',function (){
    $sim=\App\Models\CameraFeature::take(500)->get();
    return $sim;
});



Route::get('wlan_field',function (){
    $sim=\App\Models\Wlan::take(500)->get();
    return $sim;
});


Route::get('gps_field',function (){
    $sim=\App\Models\GPS::take(500)->get();
    return $sim;
});


Route::get('nfc_field',function (){
    $sim=\App\Models\NFC::take(500)->get();
    return $sim;
});

Route::get('usb_field',function (){
    $sim=\App\Models\USB::take(500)->get();
    return $sim;
});



Route::get('ir_field',function (){
    $sim=\App\Models\Infrared::take(500)->get();
    return $sim;
});


Route::get('data_field',function (){
    $sim=\App\Models\Data::take(500)->get();
    return $sim;
});


Route::get('bluetooth_field',function (){
    $sim=\App\Models\Bluetooth::take(500)->get();
    return $sim;
});


Route::get('radio_field',function (){
    $sim=\App\Models\Radio::take(500)->get();
    return $sim;
});



Route::get('feature_game_field',function (){
    $sim=\App\Models\Game::take(500)->get();
    return $sim;
});


Route::get('torch_field',function (){
    $sim=\App\Models\Torch::take(500)->get();
    return $sim;
});


Route::get('extra_feature_field',function (){
    $sim=\App\Models\ExtraFeature::take(500)->get();
    return $sim;
});


Route::get('battery_field',function (){
    $sim=\App\Models\Batterie::take(500)->get();
    return $sim;
});


Route::get('sensor_field',function (){
    $sim=\App\Models\FeatureSensor::take(500)->get();
    return $sim;
});


Route::get('browser_field',function (){
    $sim=\App\Models\Browser::take(500)->get();
    return $sim;
});

Route::get('frequency_field',function (){
    $sim=\App\Models\Frequency::take(500)->get();
    return $sim;
});



























































