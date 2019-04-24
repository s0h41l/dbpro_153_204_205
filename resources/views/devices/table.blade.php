<table class="table table-responsive-sm table-striped" id="devices-table">
    <thead>
        <th>Description</th>
        <th>Release Date</th>
        <th>Price</th>
        <th>Os Id</th>
        <th>Ui Id</th>
        <th>Dimensions Id</th>
        <th>Weight Id</th>
        <th>Sim Id</th>
        <th>Color Id</th>
        <th>Twog Id</th>
        <th>Threeg Id</th>
        <th>Fourg Id</th>
        <th>Cpu Id</th>
        <th>Chip Set Id</th>
        <th>Display Technology Id</th>
        <th>Resolution Id</th>
        <th>Screen Size Id</th>
        <th>Display Protection Id</th>
        <th>Display Extra Feature Id</th>
        <th>Built In Memory Id</th>
        <th>Sd Card Id</th>
        <th>Main Camera Id</th>
        <th>Secondary Camera Id</th>
        <th>Camera Features Id</th>
        <th>Connectivity Wlan Id</th>
        <th>Connectivity Gps Id</th>
        <th>Connectivity Nfc Id</th>
        <th>Connectivity Usb Id</th>
        <th>Connectivity Infrared Id</th>
        <th>Connectivity Data Id</th>
        <th>Connectivity Bluetooth Id</th>
        <th>Connectivity Radio Id</th>
        <th>Feature Message Id</th>
        <th>Feature Game Id</th>
        <th>Feature Torch Id</th>
        <th>Extra Feature Id</th>
        <th>Battery Id</th>
        <th>Feature Sensor Id</th>
        <th>Feature Browser Id</th>
        <th>Frequency Id</th>
        <th>Cover Image</th>
        <th>Image 1</th>
        <th>Image 2</th>
        <th>Image 3</th>
        <th>Image 4</th>
        <th>Image 5</th>
        <th>Image 6</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($devices as $device)
        <tr>
            <td>{!! $device->description !!}</td>
            <td>{!! $device->release_date !!}</td>
            <td>{!! $device->price !!}</td>
            <td>{!! $device->os_id !!}</td>
            <td>{!! $device->ui_id !!}</td>
            <td>{!! $device->dimensions_id !!}</td>
            <td>{!! $device->weight_id !!}</td>
            <td>{!! $device->sim_id !!}</td>
            <td>{!! $device->color_id !!}</td>
            <td>{!! $device->twog_id !!}</td>
            <td>{!! $device->threeg_id !!}</td>
            <td>{!! $device->fourg_id !!}</td>
            <td>{!! $device->cpu_id !!}</td>
            <td>{!! $device->chip_set_id !!}</td>
            <td>{!! $device->display_technology_id !!}</td>
            <td>{!! $device->resolution_id !!}</td>
            <td>{!! $device->screen_size_id !!}</td>
            <td>{!! $device->display_protection_id !!}</td>
            <td>{!! $device->display_extra_feature_id !!}</td>
            <td>{!! $device->built_in_memory_id !!}</td>
            <td>{!! $device->sd_card_id !!}</td>
            <td>{!! $device->main_camera_id !!}</td>
            <td>{!! $device->secondary_camera_id !!}</td>
            <td>{!! $device->camera_features_id !!}</td>
            <td>{!! $device->connectivity_wlan_id !!}</td>
            <td>{!! $device->connectivity_gps_id !!}</td>
            <td>{!! $device->connectivity_nfc_id !!}</td>
            <td>{!! $device->connectivity_usb_id !!}</td>
            <td>{!! $device->connectivity_infrared_id !!}</td>
            <td>{!! $device->connectivity_data_id !!}</td>
            <td>{!! $device->connectivity_bluetooth_id !!}</td>
            <td>{!! $device->connectivity_radio_id !!}</td>
            <td>{!! $device->feature_message_id !!}</td>
            <td>{!! $device->feature_game_id !!}</td>
            <td>{!! $device->feature_torch_id !!}</td>
            <td>{!! $device->extra_feature_id !!}</td>
            <td>{!! $device->battery_id !!}</td>
            <td>{!! $device->feature_sensor_id !!}</td>
            <td>{!! $device->feature_browser_id !!}</td>
            <td>{!! $device->frequency_id !!}</td>
            <td>{!! $device->cover_image !!}</td>
            <td>{!! $device->image_1 !!}</td>
            <td>{!! $device->image_2 !!}</td>
            <td>{!! $device->image_3 !!}</td>
            <td>{!! $device->image_4 !!}</td>
            <td>{!! $device->image_5 !!}</td>
            <td>{!! $device->image_6 !!}</td>
            <td>
                {!! Form::open(['route' => ['devices.destroy', $device->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('devices.show', [$device->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('devices.edit', [$device->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>