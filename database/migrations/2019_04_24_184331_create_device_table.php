<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->date('release_date');
            $table->float('price');
            $table->bigInteger('os_id');
            $table->foreign('os_id')->references('id')->on('os');
            $table->bigInteger('ui_id');
            $table->foreign('ui_id')->references('id')->on('ui');
            $table->bigInteger('dimensions_id');
            $table->foreign('dimensions_id')->references('id')->on('dimensions');
            $table->bigInteger('weight_id');
            $table->foreign('weight_id')->references('id')->on('weight');
            $table->bigInteger('sim_id');
            $table->foreign('sim_id')->references('id')->on('sim');
            $table->bigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('color');
            $table->bigInteger('twog_id');
            $table->foreign('twog_id')->references('id')->on('twog');
            $table->bigInteger('threeg_id');
            $table->foreign('threeg_id')->references('id')->on('threeg');
            $table->bigInteger('fourg_id');
            $table->foreign('fourg_id')->references('id')->on('fourg');
            $table->bigInteger('cpu_id');
            $table->foreign('cpu_id')->references('id')->on('cpu');
            $table->bigInteger('chip_set_id');
            $table->foreign('chip_set_id')->references('id')->on('chip_set');
            $table->bigInteger('display_technology_id');
            $table->foreign('display_technology_id')->references('id')->on('display_technology');
            $table->bigInteger('resolution_id');
            $table->foreign('resolution_id')->references('id')->on('resolution');
            $table->bigInteger('screen_size_id');
            $table->foreign('screen_size_id')->references('id')->on('screen_size');
            $table->bigInteger('display_protection_id');
            $table->foreign('display_protection_id')->references('id')->on('display_protection');
            $table->bigInteger('display_extra_feature_id');
            $table->foreign('display_extra_feature_id')->references('id')->on('display_extra_feature');
            $table->bigInteger('built_in_memory_id');
            $table->foreign('built_in_memory_id')->references('id')->on('built_in_memory');
            $table->bigInteger('sd_card_id');
            $table->foreign('sd_card_id')->references('id')->on('sd_card');
            $table->bigInteger('main_camera_id');
            $table->foreign('main_camera_id')->references('id')->on('main_camera');
            $table->bigInteger('secondary_camera_id');
            $table->foreign('secondary_camera_id')->references('id')->on('secondary_camera');
            $table->bigInteger('camera_features_id');
            $table->foreign('camera_features_id')->references('id')->on('camera_features');
            $table->bigInteger('connectivity_wlan_id');
            $table->foreign('connectivity_wlan_id')->references('id')->on('connectivity_wlan');
            $table->bigInteger('connectivity_gps_id');
            $table->foreign('connectivity_gps_id')->references('id')->on('connectivity_gps');
            $table->bigInteger('connectivity_nfc_id');
            $table->foreign('connectivity_nfc_id')->references('id')->on('connectivity_nfc');
            $table->bigInteger('connectivity_usb_id');
            $table->foreign('connectivity_usb_id')->references('id')->on('connectivity_usb');
            $table->bigInteger('connectivity_infrared_id');
            $table->foreign('connectivity_infrared_id')->references('id')->on('connectivity_infrared');
            $table->bigInteger('connectivity_data_id');
            $table->foreign('connectivity_data_id')->references('id')->on('connectivity_data');
            $table->bigInteger('connectivity_bluetooth_id');
            $table->foreign('connectivity_bluetooth_id')->references('id')->on('connectivity_bluetooth');
            $table->bigInteger('connectivity_radio_id');
            $table->foreign('connectivity_radio_id')->references('id')->on('connectivity_radio');
            $table->bigInteger('feature_message_id');
            $table->foreign('feature_message_id')->references('id')->on('feature_message');
            $table->bigInteger('feature_game_id');
            $table->foreign('feature_game_id')->references('id')->on('feature_game');
            $table->bigInteger('feature_torch_id');
            $table->foreign('feature_torch_id')->references('id')->on('feature_torch');
            $table->bigInteger('extra_feature_id');
            $table->foreign('extra_feature_id')->references('id')->on('extra_feature');
            $table->bigInteger('battery_id');
            $table->foreign('battery_id')->references('id')->on('battery');
            $table->bigInteger('feature_sensor_id');
            $table->foreign('feature_sensor_id')->references('id')->on('feature_sensor');
            $table->bigInteger('feature_browser_id');
            $table->foreign('feature_browser_id')->references('id')->on('feature_browser');
            $table->bigInteger('frequency_id');
            $table->foreign('frequency_id')->references('id')->on('frequency');
            $table->text('cover_image');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->text('image_4');
            $table->text('image_5');
            $table->text('image_6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device');
    }
}
