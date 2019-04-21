<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExtraFeatureRequest;
use App\Http\Requests\UpdateExtraFeatureRequest;
use App\Repositories\ExtraFeatureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ExtraFeatureController extends AppBaseController
{
    /** @var  ExtraFeatureRepository */
    private $extraFeatureRepository;

    public function __construct(ExtraFeatureRepository $extraFeatureRepo)
    {
        $this->extraFeatureRepository = $extraFeatureRepo;
    }

    /**
     * Display a listing of the ExtraFeature.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $extraFeatures = $this->extraFeatureRepository->all();

        return view('extra_features.index')
            ->with('extraFeatures', $extraFeatures);
    }

    /**
     * Show the form for creating a new ExtraFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('extra_features.create');
    }

    /**
     * Store a newly created ExtraFeature in storage.
     *
     * @param CreateExtraFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreateExtraFeatureRequest $request)
    {
        $input = $request->all();

        $extraFeature = $this->extraFeatureRepository->create($input);

        Flash::success('Extra Feature saved successfully.');

        return redirect(route('extraFeatures.index'));
    }

    /**
     * Display the specified ExtraFeature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $extraFeature = $this->extraFeatureRepository->find($id);

        if (empty($extraFeature)) {
            Flash::error('Extra Feature not found');

            return redirect(route('extraFeatures.index'));
        }

        return view('extra_features.show')->with('extraFeature', $extraFeature);
    }

    /**
     * Show the form for editing the specified ExtraFeature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $extraFeature = $this->extraFeatureRepository->find($id);

        if (empty($extraFeature)) {
            Flash::error('Extra Feature not found');

            return redirect(route('extraFeatures.index'));
        }

        return view('extra_features.edit')->with('extraFeature', $extraFeature);
    }

    /**
     * Update the specified ExtraFeature in storage.
     *
     * @param int $id
     * @param UpdateExtraFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExtraFeatureRequest $request)
    {
        $extraFeature = $this->extraFeatureRepository->find($id);

        if (empty($extraFeature)) {
            Flash::error('Extra Feature not found');

            return redirect(route('extraFeatures.index'));
        }

        $extraFeature = $this->extraFeatureRepository->update($request->all(), $id);

        Flash::success('Extra Feature updated successfully.');

        return redirect(route('extraFeatures.index'));
    }

    /**
     * Remove the specified ExtraFeature from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $extraFeature = $this->extraFeatureRepository->find($id);

        if (empty($extraFeature)) {
            Flash::error('Extra Feature not found');

            return redirect(route('extraFeatures.index'));
        }

        $this->extraFeatureRepository->delete($id);

        Flash::success('Extra Feature deleted successfully.');

        return redirect(route('extraFeatures.index'));
    }
}
