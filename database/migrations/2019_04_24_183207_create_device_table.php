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
            $table->foreign('os_id')->references('id')->on('os')->onDelete('cascade');
            $table->bigInteger('ui_id');
            $table->foreign('ui_id')->references('id')->on('ui')->onDelete('cascade');
            $table->bigInteger('dimensions_id');
            $table->foreign('dimensions_id')->references('id')->on('dimensions')->onDelete('cascade');
            $table->bigInteger('weight_id');
            $table->foreign('weight_id')->references('id')->on('weight')->onDelete('cascade');
            $table->bigInteger('sim_id');
            $table->foreign('sim_id')->references('id')->on('sim')->onDelete('cascade');
            $table->bigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            $table->bigInteger('twog_id');
            $table->foreign('twog_id')->references('id')->on('twog')->onDelete('cascade');
            $table->bigInteger('threeg_id');
            $table->foreign('threeg_id')->references('id')->on('threeg')->onDelete('cascade');
            $table->bigInteger('fourg_id');
            $table->foreign('fourg_id')->references('id')->on('fourg')->onDelete('cascade');
            $table->bigInteger('cpu_id');
            $table->foreign('cpu_id')->references('id')->on('cpu')->onDelete('cascade');
            $table->bigInteger('chip_set_id');
            $table->foreign('chip_set_id')->references('id')->on('chip_set')->onDelete('cascade');
            $table->bigInteger('display_technology_id');
            $table->foreign('display_technology_id')->references('id')->on('display_technology')->onDelete('cascade');
            $table->bigInteger('resolution_id');
            $table->foreign('resolution_id')->references('id')->on('resolution')->onDelete('cascade');
            $table->bigInteger('screen_size_id');
            $table->foreign('screen_size_id')->references('id')->on('screen_size')->onDelete('cascade');
            $table->bigInteger('display_protection_id');
            $table->foreign('display_protection_id')->references('id')->on('display_protection')->onDelete('cascade');
            $table->bigInteger('display_extra_feature_id');
            $table->foreign('display_extra_feature_id')->references('id')->on('display_extra_feature')->onDelete('cascade');
            $table->bigInteger('built_in_memory_id');
            $table->foreign('built_in_memory_id')->references('id')->on('built_in_memory')->onDelete('cascade');
            $table->bigInteger('sd_card_id');
            $table->foreign('sd_card_id')->references('id')->on('sd_card')->onDelete('cascade');
            $table->bigInteger('main_camera_id');
            $table->foreign('main_camera_id')->references('id')->on('main_camera')->onDelete('cascade');
            $table->bigInteger('secondary_camera_id');
            $table->foreign('secondary_camera_id')->references('id')->on('secondary_camera')->onDelete('cascade');
            $table->bigInteger('camera_features_id');
            $table->foreign('camera_features_id')->references('id')->on('camera_features')->onDelete('cascade');
            $table->bigInteger('connectivity_wlan_id');
            $table->foreign('connectivity_wlan_id')->references('id')->on('connectivity_wlan')->onDelete('cascade');
            $table->bigInteger('connectivity_gps_id');
            $table->foreign('connectivity_gps_id')->references('id')->on('connectivity_gps')->onDelete('cascade');
            $table->bigInteger('connectivity_nfc_id');
            $table->foreign('connectivity_nfc_id')->references('id')->on('connectivity_nfc')->onDelete('cascade');
            $table->bigInteger('connectivity_usb_id');
            $table->foreign('connectivity_usb_id')->references('id')->on('connectivity_usb')->onDelete('cascade');
            $table->bigInteger('connectivity_infrared_id');
            $table->foreign('connectivity_infrared_id')->references('id')->on('connectivity_infrared')->onDelete('cascade');
            $table->bigInteger('connectivity_data_id');
            $table->foreign('connectivity_data_id')->references('id')->on('connectivity_data')->onDelete('cascade');
            $table->bigInteger('connectivity_bluetooth_id');
            $table->foreign('connectivity_bluetooth_id')->references('id')->on('connectivity_bluetooth')->onDelete('cascade');
            $table->bigInteger('connectivity_radio_id');
            $table->foreign('connectivity_radio_id')->references('id')->on('connectivity_radio')->onDelete('cascade');
            $table->bigInteger('feature_message_id');
            $table->foreign('feature_message_id')->references('id')->on('feature_message')->onDelete('cascade');
            $table->bigInteger('feature_game_id');
            $table->foreign('feature_game_id')->references('id')->on('feature_game')->onDelete('cascade');
            $table->bigInteger('feature_torch_id');
            $table->foreign('feature_torch_id')->references('id')->on('feature_torch')->onDelete('cascade');
            $table->bigInteger('extra_feature_id');
            $table->foreign('extra_feature_id')->references('id')->on('extra_feature')->onDelete('cascade');
            $table->bigInteger('battery_id');
            $table->foreign('battery_id')->references('id')->on('battery')->onDelete('cascade');
            $table->bigInteger('feature_sensor_id');
            $table->foreign('feature_sensor_id')->references('id')->on('feature_sensor')->onDelete('cascade');
            $table->bigInteger('feature_browser_id');
            $table->foreign('feature_browser_id')->references('id')->on('feature_browser')->onDelete('cascade');
            $table->bigInteger('frequency_id');
            $table->foreign('frequency_id')->references('id')->on('frequency')->onDelete('cascade');
            $table->bigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand')->onDelete('cascade');
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
