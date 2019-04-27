<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBatteryRequest;
use App\Http\Requests\UpdateBatteryRequest;
use App\Repositories\BatteryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BatteryController extends AppBaseController
{
    /** @var  BatteryRepository */
    private $batteryRepository;

    public function __construct(BatteryRepository $batteryRepo)
    {
        $this->batteryRepository = $batteryRepo;
    }

    /**
     * Display a listing of the Battery.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batteries = $this->batteryRepository->paginate('30');

        return view('batteries.index')
            ->with('batteries', $batteries);
    }

    /**
     * Show the form for creating a new Battery.
     *
     * @return Response
     */
    public function create()
    {
        return view('batteries.create');
    }

    /**
     * Store a newly created Battery in storage.
     *
     * @param CreateBatteryRequest $request
     *
     * @return Response
     */
    public function store(CreateBatteryRequest $request)
    {
        $input = $request->all();

        $battery = $this->batteryRepository->create($input);

        Flash::success('Battery saved successfully.');

        return redirect(route('batteries.index'));
    }

    /**
     * Display the specified Battery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $battery = $this->batteryRepository->find($id);

        if (empty($battery)) {
            Flash::error('Battery not found');

            return redirect(route('batteries.index'));
        }

        return view('batteries.show')->with('battery', $battery);
    }

    /**
     * Show the form for editing the specified Battery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $battery = $this->batteryRepository->find($id);

        if (empty($battery)) {
            Flash::error('Battery not found');

            return redirect(route('batteries.index'));
        }

        return view('batteries.edit')->with('battery', $battery);
    }

    /**
     * Update the specified Battery in storage.
     *
     * @param int $id
     * @param UpdateBatteryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBatteryRequest $request)
    {
        $battery = $this->batteryRepository->find($id);

        if (empty($battery)) {
            Flash::error('Battery not found');

            return redirect(route('batteries.index'));
        }

        $battery = $this->batteryRepository->update($request->all(), $id);

        Flash::success('Battery updated successfully.');

        return redirect(route('batteries.index'));
    }

    /**
     * Remove the specified Battery from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $battery = $this->batteryRepository->find($id);

        if (empty($battery)) {
            Flash::error('Battery not found');

            return redirect(route('batteries.index'));
        }

        $this->batteryRepository->delete($id);

        Flash::success('Battery deleted successfully.');

        return redirect(route('batteries.index'));
    }
}
