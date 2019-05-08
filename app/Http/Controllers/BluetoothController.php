<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBluetoothRequest;
use App\Http\Requests\UpdateBluetoothRequest;
use App\Repositories\BluetoothRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BluetoothController extends AppBaseController
{
    /** @var  BluetoothRepository */
    private $bluetoothRepository;

    public function __construct(BluetoothRepository $bluetoothRepo)
    {
        $this->bluetoothRepository = $bluetoothRepo;
    }

    /**
     * Display a listing of the Bluetooth.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bluetooths = $this->bluetoothRepository->paginate('30');

        return view('bluetooths.index')
            ->with('bluetooths', $bluetooths);
    }

    /**
     * Show the form for creating a new Bluetooth.
     *
     * @return Response
     */
    public function create()
    {
        return view('bluetooths.create');
    }

    /**
     * Store a newly created Bluetooth in storage.
     *
     * @param CreateBluetoothRequest $request
     *
     * @return Response
     */
    public function store(CreateBluetoothRequest $request)
    {
        $input = $request->validate([
            'details'=> 'required|unique:connectivity_bluetooth|max:255',
        ]);
        $input = $request->all();

        $bluetooth = $this->bluetoothRepository->create($input);

        Flash::success('Bluetooth saved successfully.');

        return redirect(route('bluetooths.index'));
    }

    /**
     * Display the specified Bluetooth.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bluetooth = $this->bluetoothRepository->find($id);

        if (empty($bluetooth)) {
            Flash::error('Bluetooth not found');

            return redirect(route('bluetooths.index'));
        }

        return view('bluetooths.show')->with('bluetooth', $bluetooth);
    }

    /**
     * Show the form for editing the specified Bluetooth.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bluetooth = $this->bluetoothRepository->find($id);

        if (empty($bluetooth)) {
            Flash::error('Bluetooth not found');

            return redirect(route('bluetooths.index'));
        }

        return view('bluetooths.edit')->with('bluetooth', $bluetooth);
    }

    /**
     * Update the specified Bluetooth in storage.
     *
     * @param int $id
     * @param UpdateBluetoothRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBluetoothRequest $request)
    {
        $bluetooth = $this->bluetoothRepository->find($id);

        if (empty($bluetooth)) {
            Flash::error('Bluetooth not found');

            return redirect(route('bluetooths.index'));
        }

        $bluetooth = $this->bluetoothRepository->update($request->all(), $id);

        Flash::success('Bluetooth updated successfully.');

        return redirect(route('bluetooths.index'));
    }

    /**
     * Remove the specified Bluetooth from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bluetooth = $this->bluetoothRepository->find($id);

        if (empty($bluetooth)) {
            Flash::error('Bluetooth not found');

            return redirect(route('bluetooths.index'));
        }

        $this->bluetoothRepository->delete($id);

        Flash::success('Bluetooth deleted successfully.');

        return redirect(route('bluetooths.index'));
    }
}
