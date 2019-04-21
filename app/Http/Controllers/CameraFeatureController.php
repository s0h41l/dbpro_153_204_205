<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCameraFeatureRequest;
use App\Http\Requests\UpdateCameraFeatureRequest;
use App\Repositories\CameraFeatureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CameraFeatureController extends AppBaseController
{
    /** @var  CameraFeatureRepository */
    private $cameraFeatureRepository;

    public function __construct(CameraFeatureRepository $cameraFeatureRepo)
    {
        $this->cameraFeatureRepository = $cameraFeatureRepo;
    }

    /**
     * Display a listing of the CameraFeature.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cameraFeatures = $this->cameraFeatureRepository->all();

        return view('camera_features.index')
            ->with('cameraFeatures', $cameraFeatures);
    }

    /**
     * Show the form for creating a new CameraFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('camera_features.create');
    }

    /**
     * Store a newly created CameraFeature in storage.
     *
     * @param CreateCameraFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreateCameraFeatureRequest $request)
    {
        $input = $request->all();

        $cameraFeature = $this->cameraFeatureRepository->create($input);

        Flash::success('Camera Feature saved successfully.');

        return redirect(route('cameraFeatures.index'));
    }

    /**
     * Display the specified CameraFeature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cameraFeature = $this->cameraFeatureRepository->find($id);

        if (empty($cameraFeature)) {
            Flash::error('Camera Feature not found');

            return redirect(route('cameraFeatures.index'));
        }

        return view('camera_features.show')->with('cameraFeature', $cameraFeature);
    }

    /**
     * Show the form for editing the specified CameraFeature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cameraFeature = $this->cameraFeatureRepository->find($id);

        if (empty($cameraFeature)) {
            Flash::error('Camera Feature not found');

            return redirect(route('cameraFeatures.index'));
        }

        return view('camera_features.edit')->with('cameraFeature', $cameraFeature);
    }

    /**
     * Update the specified CameraFeature in storage.
     *
     * @param int $id
     * @param UpdateCameraFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCameraFeatureRequest $request)
    {
        $cameraFeature = $this->cameraFeatureRepository->find($id);

        if (empty($cameraFeature)) {
            Flash::error('Camera Feature not found');

            return redirect(route('cameraFeatures.index'));
        }

        $cameraFeature = $this->cameraFeatureRepository->update($request->all(), $id);

        Flash::success('Camera Feature updated successfully.');

        return redirect(route('cameraFeatures.index'));
    }

    /**
     * Remove the specified CameraFeature from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cameraFeature = $this->cameraFeatureRepository->find($id);

        if (empty($cameraFeature)) {
            Flash::error('Camera Feature not found');

            return redirect(route('cameraFeatures.index'));
        }

        $this->cameraFeatureRepository->delete($id);

        Flash::success('Camera Feature deleted successfully.');

        return redirect(route('cameraFeatures.index'));
    }
}
