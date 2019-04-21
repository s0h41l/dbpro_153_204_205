<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSecondaryCameraRequest;
use App\Http\Requests\UpdateSecondaryCameraRequest;
use App\Repositories\SecondaryCameraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SecondaryCameraController extends AppBaseController
{
    /** @var  SecondaryCameraRepository */
    private $secondaryCameraRepository;

    public function __construct(SecondaryCameraRepository $secondaryCameraRepo)
    {
        $this->secondaryCameraRepository = $secondaryCameraRepo;
    }

    /**
     * Display a listing of the SecondaryCamera.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $secondaryCameras = $this->secondaryCameraRepository->all();

        return view('secondary_cameras.index')
            ->with('secondaryCameras', $secondaryCameras);
    }

    /**
     * Show the form for creating a new SecondaryCamera.
     *
     * @return Response
     */
    public function create()
    {
        return view('secondary_cameras.create');
    }

    /**
     * Store a newly created SecondaryCamera in storage.
     *
     * @param CreateSecondaryCameraRequest $request
     *
     * @return Response
     */
    public function store(CreateSecondaryCameraRequest $request)
    {
        $input = $request->all();

        $secondaryCamera = $this->secondaryCameraRepository->create($input);

        Flash::success('Secondary Camera saved successfully.');

        return redirect(route('secondaryCameras.index'));
    }

    /**
     * Display the specified SecondaryCamera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $secondaryCamera = $this->secondaryCameraRepository->find($id);

        if (empty($secondaryCamera)) {
            Flash::error('Secondary Camera not found');

            return redirect(route('secondaryCameras.index'));
        }

        return view('secondary_cameras.show')->with('secondaryCamera', $secondaryCamera);
    }

    /**
     * Show the form for editing the specified SecondaryCamera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $secondaryCamera = $this->secondaryCameraRepository->find($id);

        if (empty($secondaryCamera)) {
            Flash::error('Secondary Camera not found');

            return redirect(route('secondaryCameras.index'));
        }

        return view('secondary_cameras.edit')->with('secondaryCamera', $secondaryCamera);
    }

    /**
     * Update the specified SecondaryCamera in storage.
     *
     * @param int $id
     * @param UpdateSecondaryCameraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSecondaryCameraRequest $request)
    {
        $secondaryCamera = $this->secondaryCameraRepository->find($id);

        if (empty($secondaryCamera)) {
            Flash::error('Secondary Camera not found');

            return redirect(route('secondaryCameras.index'));
        }

        $secondaryCamera = $this->secondaryCameraRepository->update($request->all(), $id);

        Flash::success('Secondary Camera updated successfully.');

        return redirect(route('secondaryCameras.index'));
    }

    /**
     * Remove the specified SecondaryCamera from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $secondaryCamera = $this->secondaryCameraRepository->find($id);

        if (empty($secondaryCamera)) {
            Flash::error('Secondary Camera not found');

            return redirect(route('secondaryCameras.index'));
        }

        $this->secondaryCameraRepository->delete($id);

        Flash::success('Secondary Camera deleted successfully.');

        return redirect(route('secondaryCameras.index'));
    }
}
