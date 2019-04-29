<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMainCameraRequest;
use App\Http\Requests\UpdateMainCameraRequest;
use App\Repositories\MainCameraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MainCameraController extends AppBaseController
{
    /** @var  MainCameraRepository */
    private $mainCameraRepository;

    public function __construct(MainCameraRepository $mainCameraRepo)
    {
        $this->mainCameraRepository = $mainCameraRepo;
    }

    /**
     * Display a listing of the MainCamera.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mainCameras = $this->mainCameraRepository->paginate('10');

        return view('main_cameras.index')
            ->with('mainCameras', $mainCameras);
    }

    /**
     * Show the form for creating a new MainCamera.
     *
     * @return Response
     */
    public function create()
    {
        return view('main_cameras.create');
    }

    /**
     * Store a newly created MainCamera in storage.
     *
     * @param CreateMainCameraRequest $request
     *
     * @return Response
     */
    public function store(CreateMainCameraRequest $request)
    {
        $input = $request->all();

        $mainCamera = $this->mainCameraRepository->create($input);

        Flash::success('Main Camera saved successfully.');

        return redirect(route('mainCameras.index'));
    }

    /**
     * Display the specified MainCamera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mainCamera = $this->mainCameraRepository->find($id);

        if (empty($mainCamera)) {
            Flash::error('Main Camera not found');

            return redirect(route('mainCameras.index'));
        }

        return view('main_cameras.show')->with('mainCamera', $mainCamera);
    }

    /**
     * Show the form for editing the specified MainCamera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mainCamera = $this->mainCameraRepository->find($id);

        if (empty($mainCamera)) {
            Flash::error('Main Camera not found');

            return redirect(route('mainCameras.index'));
        }

        return view('main_cameras.edit')->with('mainCamera', $mainCamera);
    }

    /**
     * Update the specified MainCamera in storage.
     *
     * @param int $id
     * @param UpdateMainCameraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMainCameraRequest $request)
    {
        $mainCamera = $this->mainCameraRepository->find($id);

        if (empty($mainCamera)) {
            Flash::error('Main Camera not found');

            return redirect(route('mainCameras.index'));
        }

        $mainCamera = $this->mainCameraRepository->update($request->all(), $id);

        Flash::success('Main Camera updated successfully.');

        return redirect(route('mainCameras.index'));
    }

    /**
     * Remove the specified MainCamera from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mainCamera = $this->mainCameraRepository->find($id);

        if (empty($mainCamera)) {
            Flash::error('Main Camera not found');

            return redirect(route('mainCameras.index'));
        }

        $this->mainCameraRepository->delete($id);

        Flash::success('Main Camera deleted successfully.');

        return redirect(route('mainCameras.index'));
    }
}
