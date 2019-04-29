<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Repositories\DeviceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;

class DeviceController extends AppBaseController
{
    /** @var  DeviceRepository */
    private $deviceRepository;

    public function __construct(DeviceRepository $deviceRepo)
    {
        $this->deviceRepository = $deviceRepo;
    }

    /**
     * Display a listing of the Device.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $devices = $this->deviceRepository->paginate('10');

        return view('devices.index')->with('devices', $devices);
    }

    /**
     * Show the form for creating a new Device.
     *
     * @return Response
     */
    public function create()
    {
        return view('devices.create');
    }

    /**
     * Store a newly created Device in storage.
     *
     * @param CreateDeviceRequest $request
     *
     * @return Response
     */
    public function store(CreateDeviceRequest $request)
    {
        $input = $request->all();
        $input['release_date']=null;
        $img=$request->file('cover_image');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['cover_image']=$uniqueId;



        $img=$request->file('image_1');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['image_1']=$uniqueId;

        $img=$request->file('image_2');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['image_2']=$uniqueId;


        $img=$request->file('image_3');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['image_3']=$uniqueId;


        $img=$request->file('image_4');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['image_4']=$uniqueId;


        $img=$request->file('image_5');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['image_4']=$uniqueId;


        $img=$request->file('image_6');
        $uniqueId= time().'-'.mt_rand();
        $img->move('images',$uniqueId);
        $input['image_5']=$uniqueId;


        $device = $this->deviceRepository->create($input);

        Flash::success('Device saved successfully.');

        return redirect(route('devices.index'));
    }

    /**
     * Display the specified Device.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
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
        return view('devices.show')->with('device', $results);




        $device = $this->deviceRepository->find($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }

        return view('devices.show')->with('device', $device);
    }

    /**
     * Show the form for editing the specified Device.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $device = $this->deviceRepository->find($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }

        return view('devices.edit')->with('device', $device);
    }

    /**
     * Update the specified Device in storage.
     *
     * @param int $id
     * @param UpdateDeviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeviceRequest $request)
    {
        $device = $this->deviceRepository->find($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }

        $device = $this->deviceRepository->update($request->all(), $id);

        Flash::success('Device updated successfully.');

        return redirect(route('devices.index'));
    }

    /**
     * Remove the specified Device from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $device = $this->deviceRepository->find($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }

        $this->deviceRepository->delete($id);

        Flash::success('Device deleted successfully.');

        return redirect(route('devices.index'));
    }
}
