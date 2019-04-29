<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDisplayExtraFeatureRequest;
use App\Http\Requests\UpdateDisplayExtraFeatureRequest;
use App\Repositories\DisplayExtraFeatureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DisplayExtraFeatureController extends AppBaseController
{
    /** @var  DisplayExtraFeatureRepository */
    private $displayExtraFeatureRepository;

    public function __construct(DisplayExtraFeatureRepository $displayExtraFeatureRepo)
    {
        $this->displayExtraFeatureRepository = $displayExtraFeatureRepo;
    }

    /**
     * Display a listing of the DisplayExtraFeature.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $displayExtraFeatures = $this->displayExtraFeatureRepository->paginate('10');

        return view('display_extra_features.index')
            ->with('displayExtraFeatures', $displayExtraFeatures);
    }

    /**
     * Show the form for creating a new DisplayExtraFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('display_extra_features.create');
    }

    /**
     * Store a newly created DisplayExtraFeature in storage.
     *
     * @param CreateDisplayExtraFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreateDisplayExtraFeatureRequest $request)
    {
        $input = $request->all();

        $displayExtraFeature = $this->displayExtraFeatureRepository->create($input);

        Flash::success('Display Extra Feature saved successfully.');

        return redirect(route('displayExtraFeatures.index'));
    }

    /**
     * Display the specified DisplayExtraFeature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $displayExtraFeature = $this->displayExtraFeatureRepository->find($id);

        if (empty($displayExtraFeature)) {
            Flash::error('Display Extra Feature not found');

            return redirect(route('displayExtraFeatures.index'));
        }

        return view('display_extra_features.show')->with('displayExtraFeature', $displayExtraFeature);
    }

    /**
     * Show the form for editing the specified DisplayExtraFeature.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $displayExtraFeature = $this->displayExtraFeatureRepository->find($id);

        if (empty($displayExtraFeature)) {
            Flash::error('Display Extra Feature not found');

            return redirect(route('displayExtraFeatures.index'));
        }

        return view('display_extra_features.edit')->with('displayExtraFeature', $displayExtraFeature);
    }

    /**
     * Update the specified DisplayExtraFeature in storage.
     *
     * @param int $id
     * @param UpdateDisplayExtraFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDisplayExtraFeatureRequest $request)
    {
        $displayExtraFeature = $this->displayExtraFeatureRepository->find($id);

        if (empty($displayExtraFeature)) {
            Flash::error('Display Extra Feature not found');

            return redirect(route('displayExtraFeatures.index'));
        }

        $displayExtraFeature = $this->displayExtraFeatureRepository->update($request->all(), $id);

        Flash::success('Display Extra Feature updated successfully.');

        return redirect(route('displayExtraFeatures.index'));
    }

    /**
     * Remove the specified DisplayExtraFeature from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $displayExtraFeature = $this->displayExtraFeatureRepository->find($id);

        if (empty($displayExtraFeature)) {
            Flash::error('Display Extra Feature not found');

            return redirect(route('displayExtraFeatures.index'));
        }

        $this->displayExtraFeatureRepository->delete($id);

        Flash::success('Display Extra Feature deleted successfully.');

        return redirect(route('displayExtraFeatures.index'));
    }
}
