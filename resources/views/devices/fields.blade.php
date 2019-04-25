<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Release Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('release_date', 'Release Date:') !!}
    {!! Form::text('release_date', null, ['class' => 'form-control','id'=>'release_date']) !!}
</div>

@section('scripts')
   <script type="text/javascript">
           $('#release_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endsection

<!-- Price Field -->
{!! Form::label('price', 'Price:') !!}
<div class="form-group col-sm-6">

    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Os Id Field -->
{!! Form::label('os_id', 'OS') !!}
<div class="form-group">

    <select class="form-control w-75" name="os_id" id="os_field"></select>

</div>

<!-- Ui Id Field -->
{!! Form::label('ui_id', 'UI') !!}
<div class="form-group">

    <select class="form-control w-75" name="ui_id" id="ui_field"></select>
</div>

<!-- Dimensions Id Field -->
{!! Form::label('dimensions_id', 'Dimensions Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="dimensions_id" id="dimension_field"></select>
</div>

<!-- Weight Id Field -->
{!! Form::label('weight_id', 'Weight Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="os" id="weight_field"></select>
</div>

<!-- Sim Id Field -->
{!! Form::label('sim_id', 'Sim Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="weight_id" id="sim_field"></select>
</div>

<!-- Color Id Field -->
{!! Form::label('color_id', 'Color Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="color_id" id="color_field"></select>
</div>

<!-- Twog Id Field -->
{!! Form::label('twog_id', 'Twog Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="twog_id" id="two_field"></select>
</div>

<!-- Threeg Id Field -->
{!! Form::label('threeg_id', 'Threeg Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="threeg_id" id="threeg_field"></select>
</div>

<!-- Fourg Id Field -->
{!! Form::label('fourg_id', 'Fourg Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="fourg_id" id="fourg_field"></select>
</div>

{!! Form::label('cpu_id', 'Cpu Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="cpu_id" id="cpu_field"></select>
</div>

<!-- Chip Set Id Field -->
{!! Form::label('chip_set_id', 'Chip Set Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="chip_set_id" id="chipset_field"></select>
</div>

<!-- Display Technology Id Field -->
{!! Form::label('display_technology_id', 'Display Technology Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="display_technology_id" id="display_technology_field"></select>
</div>

<!-- Resolution Id Field -->
{!! Form::label('resolution_id', 'Resolution Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="resolution_id" id="resolution_field"></select>
</div>

<!-- Screen Size Id Field -->
{!! Form::label('screen_size_id', 'Screen Size Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="screen_size_id" id="screen_size_field"></select>
</div>

<!-- Display Protection Id Field -->
{!! Form::label('display_protection_id', 'Display Protection Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="display_protection_id" id="display_protection_field"></select>
</div>

<!-- Display Extra Feature Id Field -->
{!! Form::label('display_extra_feature_id', 'Display Extra Feature Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="display_extra_feature_id" id="display_extra_feature_field"></select>
</div>

<!-- Built In Memory Id Field -->
{!! Form::label('built_in_memory_id', 'Built In Memory Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="built_in_memory_id" id="built_in_memory_field"></select>
</div>

<!-- Sd Card Id Field -->
{!! Form::label('sd_card_id', 'Sd Card Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="sd_card_id" id="sd_card_field"></select>
</div>

<!-- Main Camera Id Field -->
{!! Form::label('main_camera_id', 'Main Camera Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="main_camera_id" id="main_camera_field"></select>
</div>

<!-- Secondary Camera Id Field -->
{!! Form::label('secondary_camera_id', 'Secondary Camera Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="secondary_camera_id" id="camera_field"></select>
</div>

<!-- Camera Features Id Field -->
{!! Form::label('camera_features_id', 'Camera Features Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="camera_features_id" id="camera_feature_field"></select>
</div>

<!-- Connectivity Wlan Id Field -->
{!! Form::label('connectivity_wlan_id', 'Connectivity Wlan Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_wlan_id" id="wlan_field"></select>
</div>

<!-- Connectivity Gps Id Field -->
{!! Form::label('connectivity_gps_id', 'Connectivity Gps Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_gps_id" id="gps_field"></select>
</div>

<!-- Connectivity Nfc Id Field -->
{!! Form::label('connectivity_nfc_id', 'Connectivity Nfc Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_nfc_id" id="nfc_field"></select>
</div>

<!-- Connectivity Usb Id Field -->
{!! Form::label('connectivity_usb_id', 'Connectivity Usb Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_usb_id" id="usb_field"></select>
</div>

<!-- Connectivity Infrared Id Field -->
{!! Form::label('connectivity_infrared_id', 'Connectivity Infrared Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_infrared_id" id="ir_field"></select>
</div>

<!-- Connectivity Data Id Field -->
{!! Form::label('connectivity_data_id', 'Connectivity Data Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_data_id" id="data_field"></select>
</div>

<!-- Connectivity Bluetooth Id Field -->
{!! Form::label('connectivity_bluetooth_id', 'Connectivity Bluetooth Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_bluetooth_id" id="bluetooth_field"></select>
</div>

<!-- Connectivity Radio Id Field -->
{!! Form::label('connectivity_radio_id', 'Connectivity Radio Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="connectivity_radio_id" id="radio_field"></select>
</div>

<!-- Feature Message Id Field -->
{!! Form::label('feature_message_id', 'Feature Message Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="feature_message_id" id="feature_message_field"></select>
</div>

<!-- Feature Game Id Field -->
{!! Form::label('feature_game_id', 'Feature Game Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="feature_game_id" id="feature_game_field"></select>
</div>

<!-- Feature Torch Id Field -->
{!! Form::label('feature_torch_id', 'Feature Torch Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="feature_torch_id" id="torch_field"></select>
</div>

<!-- Extra Feature Id Field -->
{!! Form::label('extra_feature_id', 'Extra Feature Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="extra_feature_id" id="extra_feature_field"></select>
</div>

<!-- Battery Id Field -->
{!! Form::label('battery_id', 'Battery Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="battery_id" id="battery_field"></select>
</div>

<!-- Feature Sensor Id Field -->
{!! Form::label('feature_sensor_id', 'Feature Sensor Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="feature_sensor_id" id="sensor_field"></select>
</div>

<!-- Feature Browser Id Field -->
{!! Form::label('feature_browser_id', 'Feature Browser Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="feature_browser_id" id="browser_field"></select>
</div>

<!-- Frequency Id Field -->
{!! Form::label('frequency_id', 'Frequency Id:') !!}
<div class="form-group">

    <select class="form-control w-75" name="frequency_id" id="frequency_field"></select>
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






<script>
    var os=[];
    $.ajax({
        url:'{{url('api/os')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                os.push({id:value.id,text:value.details});
            })
            $("#os_field").select2({
                data:os
            });
        }
    })


    var ui=[];
    $.ajax({
        url:'{{url('api/ui')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                ui.push({id:value.id,text:value.details});
            })
            $("#ui_field").select2({
                data:ui
            });
        }
    })

    var chipset=[];
    $.ajax({
        url:'{{url('api/chipset')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                chipset.push({id:value.id,text:value.details});
            })
            $("#chipset_field").select2({
                data:chipset
            });
        }
    })

    var nfc=[];
    $.ajax({
        url:'{{url('api/nfc')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                nfc.push({id:value.id,text:value.details});
            })
            $("#nfc_field").select2({
                data:nfc
            });
        }
    })

    var display_protection=[];
    $.ajax({
        url:'{{url('api/display_protection')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                display_protection.push({id:value.id,text:value.details});
            })
            $("#display_protection_field").select2({
                data:display_protection
            });
        }
    })


    var feature_message_field=[];
    $.ajax({
        url:'{{url('api/feature_message_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                feature_message_field.push({id:value.id,text:value.details});
            })
            $("#feature_message_field").select2({
                data:feature_message_field
            });
        }
    })

    var main_camera_field=[];
    $.ajax({
        url:'{{url('api/main_camera_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                main_camera_field.push({id:value.id,text:value.details});
            })
            $("#main_camera_field").select2({
                data:main_camera_field
            });
        }
    })

    var sims=[];
    $.ajax({
        url:'{{url('api/sim_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {

                sims.push({id:value.id,text:value.details});
            })
            $("#sim_field").select2({
                data:sims
            });
        }
    })


    var secondary_camera=[];
    $.ajax({
        url:'{{url('api/secondary_camera')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                secondary_camera.push({id:value.id,text:value.details});
            })
            $("#camera_field").select2({
                data:secondary_camera
            });
        }
    })


    var dimension_field=[];
    $.ajax({
        url:'{{url('api/dimension_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                dimension_field.push({id:value.id,text:value.details});
            })
            $("#dimension_field").select2({
                data:dimension_field
            });
        }
    })




    var weight_field=[];
    $.ajax({
        url:'{{url('api/weight_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                weight_field.push({id:value.id,text:value.weight});
            })
            $("#weight_field").select2({
                data:weight_field
            });
        }
    })


    var sim_field=[];
    $.ajax({
        url:'{{url('api/sim_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                sim_field.push({id:value.id,text:value.details});
            })
            $("#sim_field").select2({
                data:sim_field
            });
        }
    })


    var color_field=[];
    $.ajax({
        url:'{{url('api/color_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                color_field.push({id:value.id,text:value.color});
            })
            $("#color_field").select2({
                data:color_field
            });
        }
    })



    var two_field=[];
    $.ajax({
        url:'{{url('api/two_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                two_field.push({id:value.id,text:value.details});
            })
            $("#two_field").select2({
                data:two_field
            });
        }
    })


    var threeg_field=[];
    $.ajax({
        url:'{{url('api/threeg_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                threeg_field.push({id:value.id,text:value.details});
            })
            $("#threeg_field").select2({
                data:threeg_field
            });
        }
    })


    var fourg_field=[];
    $.ajax({
        url:'{{url('api/fourg_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                fourg_field.push({id:value.id,text:value.details});
            })
            $("#fourg_field").select2({
                data:fourg_field
            });
        }
    })


    var cpu_field=[];
    $.ajax({
        url:'{{url('api/cpu_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                cpu_field.push({id:value.id,text:value.details});
            })
            $("#cpu_field").select2({
                data:cpu_field
            });
        }
    })



    var display_technology_field=[];
    $.ajax({
        url:'{{url('api/display_technology_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                display_technology_field.push({id:value.id,text:value.details});
            })
            $("#display_technology_field").select2({
                data:display_technology_field
            });
        }
    })



    var resolution_field=[];
    $.ajax({
        url:'{{url('api/resolution_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                resolution_field.push({id:value.id,text:value.height+"x"+value.width});
            })
            $("#resolution_field").select2({
                data:resolution_field
            });
        }
    })


    var screen_size_field=[];
    $.ajax({
        url:'{{url('api/screen_size_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                screen_size_field.push({id:value.id,text:value.size});
            })
            $("#screen_size_field").select2({
                data:screen_size_field
            });
        }
    })


    var extra_feature_field=[];
    $.ajax({
        url:'{{url('api/extra_feature_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                extra_feature_field.push({id:value.id,text:value.details});
            })
            $("#extra_feature_field").select2({
                data:extra_feature_field
            });
        }
    })

    var display_extra_feature_field=[];
    $.ajax({
        url:'{{url('api/display_extra_feature_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                display_extra_feature_field.push({id:value.id,text:value.details});
            })
            $("#display_extra_feature_field").select2({
                data:display_extra_feature_field
            });
        }
    })




    var built_in_memory_field=[];
    $.ajax({
        url:'{{url('api/built_in_memory_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                built_in_memory_field.push({id:value.id,text:value.details});
            })
            $("#built_in_memory_field").select2({
                data:built_in_memory_field
            });
        }
    })

    var built_in_memory_field=[];
    $.ajax({
        url:'{{url('api/built_in_memory_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                built_in_memory_field.push({id:value.id,text:value.details});
            })
            $("#built_in_memory_field").select2({
                data:built_in_memory_field
            });
        }
    })





    var main_camera_field=[];
    $.ajax({
        url:'{{url('api/main_camera_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                main_camera_field.push({id:value.id,text:value.details});
            })
            $("#main_camera_field").select2({
                data:main_camera_field
            });
        }
    })

    var camera_field=[];
    $.ajax({
        url:'{{url('api/camera_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                camera_field.push({id:value.id,text:value.details});
            })
            $("#camera_field").select2({
                data:camera_field
            });
        }
    })


    var camera_feature_field=[];
    $.ajax({
        url:'{{url('api/camera_feature_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                camera_feature_field.push({id:value.id,text:value.details});
            })
            $("#camera_feature_field").select2({
                data:camera_feature_field
            });
        }
    })


    var gps_field=[];
    $.ajax({
        url:'{{url('api/gps_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                gps_field.push({id:value.id,text:value.details});
            })
            $("#gps_field").select2({
                data:gps_field
            });
        }
    })



    var sd_card_field=[];
    $.ajax({
        url:'{{url('api/sd_card_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                sd_card_field.push({id:value.id,text:value.details});
            })
            $("#sd_card_field").select2({
                data:sd_card_field
            });
        }
    })

    var wlan_field=[];
    $.ajax({
        url:'{{url('api/wlan_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                wlan_field.push({id:value.id,text:value.details});
            })
            $("#wlan_field").select2({
                data:wlan_field
            });
        }
    })

    var usb_field=[];
    $.ajax({
        url:'{{url('api/usb_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                usb_field.push({id:value.id,text:value.details});
            })
            $("#usb_field").select2({
                data:usb_field
            });
        }
    })

    var ir_field=[];
    $.ajax({
        url:'{{url('api/ir_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                ir_field.push({id:value.id,text:value.details});
            })
            $("#ir_field").select2({
                data:ir_field
            });
        }
    })


    var data_field=[];
    $.ajax({
        url:'{{url('api/data_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                data_field.push({id:value.id,text:value.details});
            })
            $("#data_field").select2({
                data:data_field
            });
        }
    })


    var bluetooth_field=[];
    $.ajax({
        url:'{{url('api/bluetooth_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                bluetooth_field.push({id:value.id,text:value.details});
            })
            $("#bluetooth_field").select2({
                data:bluetooth_field
            });
        }
    })



    var radio_field=[];
    $.ajax({
        url:'{{url('api/radio_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                radio_field.push({id:value.id,text:value.details});
            })
            $("#radio_field").select2({
                data:radio_field
            });
        }
    })



    var feature_game_field=[];
    $.ajax({
        url:'{{url('api/feature_game_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                feature_game_field.push({id:value.id,text:value.details});
            })
            $("#feature_game_field").select2({
                data:feature_game_field
            });
        }
    })

    var torch_field=[];
    $.ajax({
        url:'{{url('api/torch_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                torch_field.push({id:value.id,text:value.details});
            })
            $("#torch_field").select2({
                data:torch_field
            });
        }
    })


    var extra_feature_field=[];
    $.ajax({
        url:'{{url('api/extra_feature_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                extra_feature_field.push({id:value.id,text:value.details});
            })
            $("#extra_feature_field").select2({
                data:extra_feature_field
            });
        }
    })


    var battery_field=[];
    $.ajax({
        url:'{{url('api/battery_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                battery_field.push({id:value.id,text:value.details});
            })
            $("#battery_field").select2({
                data:battery_field
            });
        }
    })


    var sensor_field=[];
    $.ajax({
        url:'{{url('api/sensor_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                sensor_field.push({id:value.id,text:value.details});
            })
            $("#sensor_field").select2({
                data:sensor_field
            });
        }
    })

    var browser_field=[];
    $.ajax({
        url:'{{url('api/browser_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                browser_field.push({id:value.id,text:value.details});
            })
            $("#browser_field").select2({
                data:browser_field
            });
        }
    })


    var frequency_field=[];
    $.ajax({
        url:'{{url('api/frequency_field')}}',
        method:'get',
        success:function (data) {
            $.each(data,function (key,value) {
                frequency_field.push({id:value.id,text:value.details});
            })
            $("#frequency_field").select2({
                data:frequency_field
            });
        }
    })












































</script>


