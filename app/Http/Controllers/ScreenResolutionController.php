<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScreenResolutionRequest;
use App\Http\Requests\UpdateScreenResolutionRequest;
use App\Repositories\ScreenResolutionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ScreenResolutionController extends AppBaseController
{
    /** @var  ScreenResolutionRepository */
    private $screenResolutionRepository;

    public function __construct(ScreenResolutionRepository $screenResolutionRepo)
    {
        $this->screenResolutionRepository = $screenResolutionRepo;
    }

    /**
     * Display a listing of the ScreenResolution.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $screenResolutions = $this->screenResolutionRepository->paginate('10');

        return view('screen_resolutions.index')
            ->with('screenResolutions', $screenResolutions);
    }

    /**
     * Show the form for creating a new ScreenResolution.
     *
     * @return Response
     */
    public function create()
    {
        return view('screen_resolutions.create');
    }

    /**
     * Store a newly created ScreenResolution in storage.
     *
     * @param CreateScreenResolutionRequest $request
     *
     * @return Response
     */
    public function store(CreateScreenResolutionRequest $request)
    {
        $input = $request->all();

        $screenResolution = $this->screenResolutionRepository->create($input);

        Flash::success('Screen Resolution saved successfully.');

        return redirect(route('screenResolutions.index'));
    }

    /**
     * Display the specified ScreenResolution.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $screenResolution = $this->screenResolutionRepository->find($id);

        if (empty($screenResolution)) {
            Flash::error('Screen Resolution not found');

            return redirect(route('screenResolutions.index'));
        }

        return view('screen_resolutions.show')->with('screenResolution', $screenResolution);
    }

    /**
     * Show the form for editing the specified ScreenResolution.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $screenResolution = $this->screenResolutionRepository->find($id);

        if (empty($screenResolution)) {
            Flash::error('Screen Resolution not found');

            return redirect(route('screenResolutions.index'));
        }

        return view('screen_resolutions.edit')->with('screenResolution', $screenResolution);
    }

    /**
     * Update the specified ScreenResolution in storage.
     *
     * @param int $id
     * @param UpdateScreenResolutionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScreenResolutionRequest $request)
    {
        $screenResolution = $this->screenResolutionRepository->find($id);

        if (empty($screenResolution)) {
            Flash::error('Screen Resolution not found');

            return redirect(route('screenResolutions.index'));
        }

        $screenResolution = $this->screenResolutionRepository->update($request->all(), $id);

        Flash::success('Screen Resolution updated successfully.');

        return redirect(route('screenResolutions.index'));
    }

    /**
     * Remove the specified ScreenResolution from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $screenResolution = $this->screenResolutionRepository->find($id);

        if (empty($screenResolution)) {
            Flash::error('Screen Resolution not found');

            return redirect(route('screenResolutions.index'));
        }

        $this->screenResolutionRepository->delete($id);

        Flash::success('Screen Resolution deleted successfully.');

        return redirect(route('screenResolutions.index'));
    }
}
