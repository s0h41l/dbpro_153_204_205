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
Route::get('feature_message',function(){
    $os=\App\Models\FeatureMessage::take(500)->get();
    return $os;
});
Route::get('main_camera',function(){
    $os=\App\Models\MainCamera::take(500)->get();
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




















