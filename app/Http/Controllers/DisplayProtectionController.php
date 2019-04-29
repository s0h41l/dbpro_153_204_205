<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDisplayProtectionRequest;
use App\Http\Requests\UpdateDisplayProtectionRequest;
use App\Repositories\DisplayProtectionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DisplayProtectionController extends AppBaseController
{
    /** @var  DisplayProtectionRepository */
    private $displayProtectionRepository;

    public function __construct(DisplayProtectionRepository $displayProtectionRepo)
    {
        $this->displayProtectionRepository = $displayProtectionRepo;
    }

    /**
     * Display a listing of the DisplayProtection.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $displayProtections = $this->displayProtectionRepository->paginate('10');

        return view('display_protections.index')
            ->with('displayProtections', $displayProtections);
    }

    /**
     * Show the form for creating a new DisplayProtection.
     *
     * @return Response
     */
    public function create()
    {
        return view('display_protections.create');
    }

    /**
     * Store a newly created DisplayProtection in storage.
     *
     * @param CreateDisplayProtectionRequest $request
     *
     * @return Response
     */
    public function store(CreateDisplayProtectionRequest $request)
    {
        $input = $request->all();

        $displayProtection = $this->displayProtectionRepository->create($input);

        Flash::success('Display Protection saved successfully.');

        return redirect(route('displayProtections.index'));
    }

    /**
     * Display the specified DisplayProtection.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $displayProtection = $this->displayProtectionRepository->find($id);

        if (empty($displayProtection)) {
            Flash::error('Display Protection not found');

            return redirect(route('displayProtections.index'));
        }

        return view('display_protections.show')->with('displayProtection', $displayProtection);
    }

    /**
     * Show the form for editing the specified DisplayProtection.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $displayProtection = $this->displayProtectionRepository->find($id);

        if (empty($displayProtection)) {
            Flash::error('Display Protection not found');

            return redirect(route('displayProtections.index'));
        }

        return view('display_protections.edit')->with('displayProtection', $displayProtection);
    }

    /**
     * Update the specified DisplayProtection in storage.
     *
     * @param int $id
     * @param UpdateDisplayProtectionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDisplayProtectionRequest $request)
    {
        $displayProtection = $this->displayProtectionRepository->find($id);

        if (empty($displayProtection)) {
            Flash::error('Display Protection not found');

            return redirect(route('displayProtections.index'));
        }

        $displayProtection = $this->displayProtectionRepository->update($request->all(), $id);

        Flash::success('Display Protection updated successfully.');

        return redirect(route('displayProtections.index'));
    }

    /**
     * Remove the specified DisplayProtection from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $displayProtection = $this->displayProtectionRepository->find($id);

        if (empty($displayProtection)) {
            Flash::error('Display Protection not found');

            return redirect(route('displayProtections.index'));
        }

        $this->displayProtectionRepository->delete($id);

        Flash::success('Display Protection deleted successfully.');

        return redirect(route('displayProtections.index'));
    }
}
