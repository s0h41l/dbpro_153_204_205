<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScreenSizeRequest;
use App\Http\Requests\UpdateScreenSizeRequest;
use App\Repositories\ScreenSizeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ScreenSizeController extends AppBaseController
{
    /** @var  ScreenSizeRepository */
    private $screenSizeRepository;

    public function __construct(ScreenSizeRepository $screenSizeRepo)
    {
        $this->screenSizeRepository = $screenSizeRepo;
    }

    /**
     * Display a listing of the ScreenSize.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $screenSizes = $this->screenSizeRepository->all();

        return view('screen_sizes.index')
            ->with('screenSizes', $screenSizes);
    }

    /**
     * Show the form for creating a new ScreenSize.
     *
     * @return Response
     */
    public function create()
    {
        return view('screen_sizes.create');
    }

    /**
     * Store a newly created ScreenSize in storage.
     *
     * @param CreateScreenSizeRequest $request
     *
     * @return Response
     */
    public function store(CreateScreenSizeRequest $request)
    {
        $input = $request->all();

        $screenSize = $this->screenSizeRepository->create($input);

        Flash::success('Screen Size saved successfully.');

        return redirect(route('screenSizes.index'));
    }

    /**
     * Display the specified ScreenSize.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $screenSize = $this->screenSizeRepository->find($id);

        if (empty($screenSize)) {
            Flash::error('Screen Size not found');

            return redirect(route('screenSizes.index'));
        }

        return view('screen_sizes.show')->with('screenSize', $screenSize);
    }

    /**
     * Show the form for editing the specified ScreenSize.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $screenSize = $this->screenSizeRepository->find($id);

        if (empty($screenSize)) {
            Flash::error('Screen Size not found');

            return redirect(route('screenSizes.index'));
        }

        return view('screen_sizes.edit')->with('screenSize', $screenSize);
    }

    /**
     * Update the specified ScreenSize in storage.
     *
     * @param int $id
     * @param UpdateScreenSizeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScreenSizeRequest $request)
    {
        $screenSize = $this->screenSizeRepository->find($id);

        if (empty($screenSize)) {
            Flash::error('Screen Size not found');

            return redirect(route('screenSizes.index'));
        }

        $screenSize = $this->screenSizeRepository->update($request->all(), $id);

        Flash::success('Screen Size updated successfully.');

        return redirect(route('screenSizes.index'));
    }

    /**
     * Remove the specified ScreenSize from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $screenSize = $this->screenSizeRepository->find($id);

        if (empty($screenSize)) {
            Flash::error('Screen Size not found');

            return redirect(route('screenSizes.index'));
        }

        $this->screenSizeRepository->delete($id);

        Flash::success('Screen Size deleted successfully.');

        return redirect(route('screenSizes.index'));
    }
}
