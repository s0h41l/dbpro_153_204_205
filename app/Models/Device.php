<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Device
 * @package App\Models
 * @version April 24, 2019, 6:49 pm UTC
 *
 * @property \App\Models\O os
 * @property \App\Models\Ui ui
 * @property \App\Models\Dimension dimensions
 * @property \App\Models\Weight weight
 * @property \App\Models\Sim sim
 * @property \App\Models\Color color
 * @property \App\Models\Twog twog
 * @property \App\Models\Threeg threeg
 * @property \App\Models\Fourg fourg
 * @property \App\Models\Cpu cpu
 * @property \App\Models\ChipSet chipSet
 * @property \App\Models\DisplayTechnology displayTechnology
 * @property \App\Models\Resolution resolution
 * @property \App\Models\ScreenSize screenSize
 * @property \App\Models\DisplayProtection displayProtection
 * @property \App\Models\DisplayExtraFeature displayExtraFeature
 * @property \App\Models\BuiltInMemory builtInMemory
 * @property \App\Models\SdCard sdCard
 * @property \App\Models\MainCamera mainCamera
 * @property \App\Models\SecondaryCamera secondaryCamera
 * @property \App\Models\CameraFeature cameraFeatures
 * @property \App\Models\ConnectivityWlan connectivityWlan
 * @property \App\Models\ConnectivityGp connectivityGps
 * @property \App\Models\ConnectivityNfc connectivityNfc
 * @property \App\Models\ConnectivityUsb connectivityUsb
 * @property \App\Models\ConnectivityInfrared connectivityInfrared
 * @property \App\Models\ConnectivityDatum connectivityData
 * @property \App\Models\ConnectivityBluetooth connectivityBluetooth
 * @property \App\Models\ConnectivityRadio connectivityRadio
 * @property \App\Models\FeatureMessage featureMessage
 * @property \App\Models\FeatureGame featureGame
 * @property \App\Models\FeatureTorch featureTorch
 * @property \App\Models\ExtraFeature extraFeature
 * @property \App\Models\Battery battery
 * @property \App\Models\FeatureSensor featureSensor
 * @property \App\Models\FeatureBrowser featureBrowser
 * @property \App\Models\Frequency frequency
 * @property string description
 * @property string release_date
 * @property float price
 * @property integer os_id
 * @property integer ui_id
 * @property integer dimensions_id
 * @property integer weight_id
 * @property integer sim_id
 * @property integer color_id
 * @property integer twog_id
 * @property integer threeg_id
 * @property integer fourg_id
 * @property integer cpu_id
 * @property integer chip_set_id
 * @property integer display_technology_id
 * @property integer resolution_id
 * @property integer screen_size_id
 * @property integer display_protection_id
 * @property integer display_extra_feature_id
 * @property integer built_in_memory_id
 * @property integer sd_card_id
 * @property integer main_camera_id
 * @property integer secondary_camera_id
 * @property integer camera_features_id
 * @property integer connectivity_wlan_id
 * @property integer connectivity_gps_id
 * @property integer connectivity_nfc_id
 * @property integer connectivity_usb_id
 * @property integer connectivity_infrared_id
 * @property integer connectivity_data_id
 * @property integer connectivity_bluetooth_id
 * @property integer connectivity_radio_id
 * @property integer feature_message_id
 * @property integer feature_game_id
 * @property integer feature_torch_id
 * @property integer extra_feature_id
 * @property integer battery_id
 * @property integer feature_sensor_id
 * @property integer feature_browser_id
 * @property integer frequency_id
 * @property string cover_image
 * @property string image_1
 * @property string image_2
 * @property string image_3
 * @property string image_4
 * @property string image_5
 * @property string image_6
 */
class Device extends Model
{
    //use SoftDeletes;

    public $table = 'device';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'description',
        'release_date',
        'price',
        'os_id',
        'ui_id',
        'dimensions_id',
        'weight_id',
        'sim_id',
        'color_id',
        'twog_id',
        'threeg_id',
        'fourg_id',
        'cpu_id',
        'chip_set_id',
        'display_technology_id',
        'resolution_id',
        'screen_size_id',
        'display_protection_id',
        'display_extra_feature_id',
        'built_in_memory_id',
        'sd_card_id',
        'main_camera_id',
        'secondary_camera_id',
        'camera_features_id',
        'connectivity_wlan_id',
        'connectivity_gps_id',
        'connectivity_nfc_id',
        'connectivity_usb_id',
        'connectivity_infrared_id',
        'connectivity_data_id',
        'connectivity_bluetooth_id',
        'connectivity_radio_id',
        'feature_message_id',
        'feature_game_id',
        'feature_torch_id',
        'extra_feature_id',
        'battery_id',
        'feature_sensor_id',
        'feature_browser_id',
        'frequency_id',
        'cover_image',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'release_date' => 'date',
        'price' => 'float',
        'os_id' => 'integer',
        'ui_id' => 'integer',
        'dimensions_id' => 'integer',
        'weight_id' => 'integer',
        'sim_id' => 'integer',
        'color_id' => 'integer',
        'twog_id' => 'integer',
        'threeg_id' => 'integer',
        'fourg_id' => 'integer',
        'cpu_id' => 'integer',
        'chip_set_id' => 'integer',
        'display_technology_id' => 'integer',
        'resolution_id' => 'integer',
        'screen_size_id' => 'integer',
        'display_protection_id' => 'integer',
        'display_extra_feature_id' => 'integer',
        'built_in_memory_id' => 'integer',
        'sd_card_id' => 'integer',
        'main_camera_id' => 'integer',
        'secondary_camera_id' => 'integer',
        'camera_features_id' => 'integer',
        'connectivity_wlan_id' => 'integer',
        'connectivity_gps_id' => 'integer',
        'connectivity_nfc_id' => 'integer',
        'connectivity_usb_id' => 'integer',
        'connectivity_infrared_id' => 'integer',
        'connectivity_data_id' => 'integer',
        'connectivity_bluetooth_id' => 'integer',
        'connectivity_radio_id' => 'integer',
        'feature_message_id' => 'integer',
        'feature_game_id' => 'integer',
        'feature_torch_id' => 'integer',
        'extra_feature_id' => 'integer',
        'battery_id' => 'integer',
        'feature_sensor_id' => 'integer',
        'feature_browser_id' => 'integer',
        'frequency_id' => 'integer',
        'cover_image' => 'string',
        'image_1' => 'string',
        'image_2' => 'string',
        'image_3' => 'string',
        'image_4' => 'string',
        'image_5' => 'string',
        'image_6' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required',
        'release_date' => 'required',
        'price' => 'required',
        'os_id' => 'required',
        'ui_id' => 'required',
        'dimensions_id' => 'required',
        'weight_id' => 'required',
        'sim_id' => 'required',
        'color_id' => 'required',
        'twog_id' => 'required',
        'threeg_id' => 'required',
        'fourg_id' => 'required',
        'cpu_id' => 'required',
        'chip_set_id' => 'required',
        'display_technology_id' => 'required',
        'resolution_id' => 'required',
        'screen_size_id' => 'required',
        'display_protection_id' => 'required',
        'display_extra_feature_id' => 'required',
        'built_in_memory_id' => 'required',
        'sd_card_id' => 'required',
        'main_camera_id' => 'required',
        'secondary_camera_id' => 'required',
        'camera_features_id' => 'required',
        'connectivity_wlan_id' => 'required',
        'connectivity_gps_id' => 'required',
        'connectivity_nfc_id' => 'required',
        'connectivity_usb_id' => 'required',
        'connectivity_infrared_id' => 'required',
        'connectivity_data_id' => 'required',
        'connectivity_bluetooth_id' => 'required',
        'connectivity_radio_id' => 'required',
        'feature_message_id' => 'required',
        'feature_game_id' => 'required',
        'feature_torch_id' => 'required',
        'extra_feature_id' => 'required',
        'battery_id' => 'required',
        'feature_sensor_id' => 'required',
        'feature_browser_id' => 'required',
        'frequency_id' => 'required',
        'cover_image' => 'required',
        'image_1' => 'required',
        'image_2' => 'required',
        'image_3' => 'required',
        'image_4' => 'required',
        'image_5' => 'required',
        'image_6' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function os()
    {
        return $this->belongsTo(\App\Models\O::class, 'os_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ui()
    {
        return $this->belongsTo(\App\Models\Ui::class, 'ui_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function dimensions()
    {
        return $this->belongsTo(\App\Models\Dimension::class, 'dimensions_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function weight()
    {
        return $this->belongsTo(\App\Models\Weight::class, 'weight_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sim()
    {
        return $this->belongsTo(\App\Models\Sim::class, 'sim_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function color()
    {
        return $this->belongsTo(\App\Models\Color::class, 'color_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function twog()
    {
        return $this->belongsTo(\App\Models\Twog::class, 'twog_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function threeg()
    {
        return $this->belongsTo(\App\Models\Threeg::class, 'threeg_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function fourg()
    {
        return $this->belongsTo(\App\Models\Fourg::class, 'fourg_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cpu()
    {
        return $this->belongsTo(\App\Models\Cpu::class, 'cpu_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function chipSet()
    {
        return $this->belongsTo(\App\Models\ChipSet::class, 'chip_set_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function displayTechnology()
    {
        return $this->belongsTo(\App\Models\DisplayTechnology::class, 'display_technology_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function resolution()
    {
        return $this->belongsTo(\App\Models\Resolution::class, 'resolution_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function screenSize()
    {
        return $this->belongsTo(\App\Models\ScreenSize::class, 'screen_size_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function displayProtection()
    {
        return $this->belongsTo(\App\Models\DisplayProtection::class, 'display_protection_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function displayExtraFeature()
    {
        return $this->belongsTo(\App\Models\DisplayExtraFeature::class, 'display_extra_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function builtInMemory()
    {
        return $this->belongsTo(\App\Models\BuiltInMemory::class, 'built_in_memory_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sdCard()
    {
        return $this->belongsTo(\App\Models\SdCard::class, 'sd_card_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function mainCamera()
    {
        return $this->belongsTo(\App\Models\MainCamera::class, 'main_camera_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function secondaryCamera()
    {
        return $this->belongsTo(\App\Models\SecondaryCamera::class, 'secondary_camera_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cameraFeatures()
    {
        return $this->belongsTo(\App\Models\CameraFeature::class, 'camera_features_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityWlan()
    {
        return $this->belongsTo(\App\Models\ConnectivityWlan::class, 'connectivity_wlan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityGps()
    {
        return $this->belongsTo(\App\Models\ConnectivityGp::class, 'connectivity_gps_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityNfc()
    {
        return $this->belongsTo(\App\Models\ConnectivityNfc::class, 'connectivity_nfc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityUsb()
    {
        return $this->belongsTo(\App\Models\ConnectivityUsb::class, 'connectivity_usb_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityInfrared()
    {
        return $this->belongsTo(\App\Models\ConnectivityInfrared::class, 'connectivity_infrared_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityData()
    {
        return $this->belongsTo(\App\Models\ConnectivityDatum::class, 'connectivity_data_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityBluetooth()
    {
        return $this->belongsTo(\App\Models\ConnectivityBluetooth::class, 'connectivity_bluetooth_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function connectivityRadio()
    {
        return $this->belongsTo(\App\Models\ConnectivityRadio::class, 'connectivity_radio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function featureMessage()
    {
        return $this->belongsTo(\App\Models\FeatureMessage::class, 'feature_message_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function featureGame()
    {
        return $this->belongsTo(\App\Models\FeatureGame::class, 'feature_game_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function featureTorch()
    {
        return $this->belongsTo(\App\Models\FeatureTorch::class, 'feature_torch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function extraFeature()
    {
        return $this->belongsTo(\App\Models\ExtraFeature::class, 'extra_feature_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function battery()
    {
        return $this->belongsTo(\App\Models\Battery::class, 'battery_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function featureSensor()
    {
        return $this->belongsTo(\App\Models\FeatureSensor::class, 'feature_sensor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function featureBrowser()
    {
        return $this->belongsTo(\App\Models\FeatureBrowser::class, 'feature_browser_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function frequency()
    {
        return $this->belongsTo(\App\Models\Frequency::class, 'frequency_id');
    }
}
