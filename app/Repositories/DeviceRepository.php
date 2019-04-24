<?php

namespace App\Repositories;

use App\Models\Device;
use App\Repositories\BaseRepository;

/**
 * Class DeviceRepository
 * @package App\Repositories
 * @version April 24, 2019, 6:49 pm UTC
*/

class DeviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Device::class;
    }
}
