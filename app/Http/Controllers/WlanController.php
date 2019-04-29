<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWlanRequest;
use App\Http\Requests\UpdateWlanRequest;
use App\Repositories\WlanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WlanController extends AppBaseController
{
    /** @var  WlanRepository */
    private $wlanRepository;

    public function __construct(WlanRepository $wlanRepo)
    {
        $this->wlanRepository = $wlanRepo;
    }

    /**
     * Display a listing of the Wlan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $wlans = $this->wlanRepository->paginate('10');

        return view('wlans.index')
            ->with('wlans', $wlans);
    }

    /**
     * Show the form for creating a new Wlan.
     *
     * @return Response
     */
    public function create()
    {
        return view('wlans.create');
    }

    /**
     * Store a newly created Wlan in storage.
     *
     * @param CreateWlanRequest $request
     *
     * @return Response
     */
    public function store(CreateWlanRequest $request)
    {
        $input = $request->all();

        $wlan = $this->wlanRepository->create($input);

        Flash::success('Wlan saved successfully.');

        return redirect(route('wlans.index'));
    }

    /**
     * Display the specified Wlan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $wlan = $this->wlanRepository->find($id);

        if (empty($wlan)) {
            Flash::error('Wlan not found');

            return redirect(route('wlans.index'));
        }

        return view('wlans.show')->with('wlan', $wlan);
    }

    /**
     * Show the form for editing the specified Wlan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $wlan = $this->wlanRepository->find($id);

        if (empty($wlan)) {
            Flash::error('Wlan not found');

            return redirect(route('wlans.index'));
        }

        return view('wlans.edit')->with('wlan', $wlan);
    }

    /**
     * Update the specified Wlan in storage.
     *
     * @param int $id
     * @param UpdateWlanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWlanRequest $request)
    {
        $wlan = $this->wlanRepository->find($id);

        if (empty($wlan)) {
            Flash::error('Wlan not found');

            return redirect(route('wlans.index'));
        }

        $wlan = $this->wlanRepository->update($request->all(), $id);

        Flash::success('Wlan updated successfully.');

        return redirect(route('wlans.index'));
    }

    /**
     * Remove the specified Wlan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $wlan = $this->wlanRepository->find($id);

        if (empty($wlan)) {
            Flash::error('Wlan not found');

            return redirect(route('wlans.index'));
        }

        $this->wlanRepository->delete($id);

        Flash::success('Wlan deleted successfully.');

        return redirect(route('wlans.index'));
    }
}
