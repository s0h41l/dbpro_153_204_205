<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $device->description !!}</p>
</div>

<!-- Release Date Field -->
<div class="form-group">
    {!! Form::label('release_date', 'Release Date:') !!}
    <p>{!! $device->release_date !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $device->price !!}</p>
</div>

<!-- Os Id Field -->
<div class="form-group">
    {!! Form::label('os_id', 'OS:') !!}
    <select name="os_id" id="os_field"></select>

</div>

<!-- Ui Id Field -->
<div class="form-group">
    {!! Form::label('ui_id', 'Ui Id:') !!}
    <select name="ui_id" id="ui_field"></select>
</div>

<!-- Dimensions Id Field -->
<div class="form-group">
    {!! Form::label('dimensions_id', 'Dimensions Id:') !!}
    <select name="dimensions_id" id="dimension_field"></select>
</div>

<!-- Weight Id Field -->
<div class="form-group">
    {!! Form::label('weight_id', 'Weight Id:') !!}
    <select name="os" id="weight_field"></select>
</div>

<!-- Sim Id Field -->
<div class="form-group">
    {!! Form::label('sim_id', 'Sim Id:') !!}
    <select name="weight_id" id="sim_field"></select>
</div>

<!-- Color Id Field -->
<div class="form-group">
    {!! Form::label('color_id', 'Color Id:') !!}
    <select name="color_id" id="color_field"></select>
</div>

<!-- Twog Id Field -->
<div class="form-group">
    {!! Form::label('twog_id', 'Twog Id:') !!}
    <select name="twog_id" id="two_field"></select>
</div>

<!-- Threeg Id Field -->
<div class="form-group">
    {!! Form::label('threeg_id', 'Threeg Id:') !!}
    <select name="threeg_id" id="threeg_field"></select>
</div>

<!-- Fourg Id Field -->
<div class="form-group">
    {!! Form::label('fourg_id', 'Fourg Id:') !!}
    <select name="fourg_id" id="fourg_field"></select>
</div>

<!-- Cpu Id Field -->
<div class="form-group">
    {!! Form::label('cpu_id', 'Cpu Id:') !!}
    <select name="cpu_id" id="cpu_field"></select>
</div>

<!-- Chip Set Id Field -->
<div class="form-group">
    {!! Form::label('chip_set_id', 'Chip Set Id:') !!}
    <select name="chip_set_id" id="chipset_field"></select>
</div>

<!-- Display Technology Id Field -->
<div class="form-group">
    {!! Form::label('display_technology_id', 'Display Technology Id:') !!}
    <select name="display_technology_id" id="display_technology_field"></select>
</div>

<!-- Resolution Id Field -->
<div class="form-group">
    {!! Form::label('resolution_id', 'Resolution Id:') !!}
    <select name="resolution_id" id="resolution_field"></select>
</div>

<!-- Screen Size Id Field -->
<div class="form-group">
    {!! Form::label('screen_size_id', 'Screen Size Id:') !!}
    <select name="screen_size_id" id="screen_size_field"></select>
</div>

<!-- Display Protection Id Field -->
<div class="form-group">
    {!! Form::label('display_protection_id', 'Display Protection Id:') !!}
    <select name="display_protection_id" id="display_protection_field"></select>
</div>

<!-- Display Extra Feature Id Field -->
<div class="form-group">
    {!! Form::label('display_extra_feature_id', 'Display Extra Feature Id:') !!}
    <select name="display_extra_feature_id" id="extra_feature_field"></select>
</div>

<!-- Built In Memory Id Field -->
<div class="form-group">
    {!! Form::label('built_in_memory_id', 'Built In Memory Id:') !!}
    <select name="built_in_memory_id" id="built_in_memory_field"></select>
</div>

<!-- Sd Card Id Field -->
<div class="form-group">
    {!! Form::label('sd_card_id', 'Sd Card Id:') !!}
    <select name="sd_card_id" id="sd_card_field"></select>
</div>

<!-- Main Camera Id Field -->
<div class="form-group">
    {!! Form::label('main_camera_id', 'Main Camera Id:') !!}
    <select name="main_camera_id" id="main_camera_field"></select>
</div>

<!-- Secondary Camera Id Field -->
<div class="form-group">
    {!! Form::label('secondary_camera_id', 'Secondary Camera Id:') !!}
    <select name="secondary_camera_id" id="camera_field"></select>
</div>

<!-- Camera Features Id Field -->
<div class="form-group">
    {!! Form::label('camera_features_id', 'Camera Features Id:') !!}
    <select name="camera_features_id" id="camera_feature_field"></select>
</div>

<!-- Connectivity Wlan Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_wlan_id', 'Connectivity Wlan Id:') !!}
    <select name="connectivity_wlan_id" id="wlan_field"></select>
</div>

<!-- Connectivity Gps Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_gps_id', 'Connectivity Gps Id:') !!}
    <select name="connectivity_gps_id" id="gps_field"></select>
</div>

<!-- Connectivity Nfc Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_nfc_id', 'Connectivity Nfc Id:') !!}
    <select name="connectivity_nfc_id" id="nfc_field"></select>
</div>

<!-- Connectivity Usb Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_usb_id', 'Connectivity Usb Id:') !!}
    <select name="connectivity_usb_id" id="usb_field"></select>
</div>

<!-- Connectivity Infrared Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_infrared_id', 'Connectivity Infrared Id:') !!}
    <select name="connectivity_infrared_id" id="ir_field"></select>
</div>

<!-- Connectivity Data Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_data_id', 'Connectivity Data Id:') !!}
    <select name="connectivity_data_id" id="data_field"></select>
</div>

<!-- Connectivity Bluetooth Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_bluetooth_id', 'Connectivity Bluetooth Id:') !!}
    <select name="connectivity_bluetooth_id" id="bluetooth_field"></select>
</div>

<!-- Connectivity Radio Id Field -->
<div class="form-group">
    {!! Form::label('connectivity_radio_id', 'Connectivity Radio Id:') !!}
    <select name="connectivity_radio_id" id="radio_field"></select>
</div>

<!-- Feature Message Id Field -->
<div class="form-group">
    {!! Form::label('feature_message_id', 'Feature Message Id:') !!}
    <select name="feature_message_id" id="feature_message_field"></select>
</div>

<!-- Feature Game Id Field -->
<div class="form-group">
    {!! Form::label('feature_game_id', 'Feature Game Id:') !!}
    <select name="feature_game_id" id="feature_game_field"></select>
</div>

<!-- Feature Torch Id Field -->
<div class="form-group">
    {!! Form::label('feature_torch_id', 'Feature Torch Id:') !!}
    <select name="feature_torch_id" id="torch_field"></select>
</div>

<!-- Extra Feature Id Field -->
<div class="form-group">
    {!! Form::label('extra_feature_id', 'Extra Feature Id:') !!}
    <select name="extra_feature_id" id="extra_feature_field"></select>
</div>

<!-- Battery Id Field -->
<div class="form-group">
    {!! Form::label('battery_id', 'Battery Id:') !!}
    <select name="battery_id" id="battery_field"></select>
</div>

<!-- Feature Sensor Id Field -->
<div class="form-group">
    {!! Form::label('feature_sensor_id', 'Feature Sensor Id:') !!}
    <select name="feature_sensor_id" id="sensor_field"></select>
</div>

<!-- Feature Browser Id Field -->
<div class="form-group">
    {!! Form::label('feature_browser_id', 'Feature Browser Id:') !!}
    <select name="feature_browser_id" id="browser_field"></select>
</div>

<!-- Frequency Id Field -->
<div class="form-group">
    {!! Form::label('frequency_id', 'Frequency Id:') !!}
    <select name="frequency_id" id="frequency_field"></select>
</div>

<!-- Cover Image Field -->
<div class="form-group">
    {!! Form::label('cover_image', 'Cover Image:') !!}
    <input type="file" name="cover_image" class="btn btn-info">
</div>

<!-- Image 1 Field -->
<div class="form-group">
    {!! Form::label('image_1', 'Image 1:') !!}
    <input type="file" name="image_1" class="btn btn-info">
</div>

<!-- Image 2 Field -->
<div class="form-group">
    {!! Form::label('image_2', 'Image 2:') !!}
    <input type="file" name="image_2" class="btn btn-info">
</div>

<!-- Image 3 Field -->
<div class="form-group">
    {!! Form::label('image_3', 'Image 3:') !!}
    <input type="file" name="image_3" class="btn btn-info">
</div>

<!-- Image 4 Field -->
<div class="form-group">
    {!! Form::label('image_4', 'Image 4:') !!}
    <input type="file" name="image_4" class="btn btn-info">
</div>

<!-- Image 5 Field -->
<div class="form-group">
    {!! Form::label('image_5', 'Image 5:') !!}
    <input type="file" name="image_5" class="btn btn-info">
</div>

<!-- Image 6 Field -->
<div class="form-group">
    {!! Form::label('image_6', 'Image 6:') !!}
    <input type="file" name="image_6" class="btn btn-info">
</div>


