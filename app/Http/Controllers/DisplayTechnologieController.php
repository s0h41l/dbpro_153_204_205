<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDisplayTechnologieRequest;
use App\Http\Requests\UpdateDisplayTechnologieRequest;
use App\Repositories\DisplayTechnologieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DisplayTechnologieController extends AppBaseController
{
    /** @var  DisplayTechnologieRepository */
    private $displayTechnologieRepository;

    public function __construct(DisplayTechnologieRepository $displayTechnologieRepo)
    {
        $this->displayTechnologieRepository = $displayTechnologieRepo;
    }

    /**
     * Display a listing of the DisplayTechnologie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $displayTechnologies = $this->displayTechnologieRepository->all();

        return view('display_technologies.index')
            ->with('displayTechnologies', $displayTechnologies);
    }

    /**
     * Show the form for creating a new DisplayTechnologie.
     *
     * @return Response
     */
    public function create()
    {
        return view('display_technologies.create');
    }

    /**
     * Store a newly created DisplayTechnologie in storage.
     *
     * @param CreateDisplayTechnologieRequest $request
     *
     * @return Response
     */
    public function store(CreateDisplayTechnologieRequest $request)
    {
        $input = $request->all();

        $displayTechnologie = $this->displayTechnologieRepository->create($input);

        Flash::success('Display Technologie saved successfully.');

        return redirect(route('displayTechnologies.index'));
    }

    /**
     * Display the specified DisplayTechnologie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $displayTechnologie = $this->displayTechnologieRepository->find($id);

        if (empty($displayTechnologie)) {
            Flash::error('Display Technologie not found');

            return redirect(route('displayTechnologies.index'));
        }

        return view('display_technologies.show')->with('displayTechnologie', $displayTechnologie);
    }

    /**
     * Show the form for editing the specified DisplayTechnologie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $displayTechnologie = $this->displayTechnologieRepository->find($id);

        if (empty($displayTechnologie)) {
            Flash::error('Display Technologie not found');

            return redirect(route('displayTechnologies.index'));
        }

        return view('display_technologies.edit')->with('displayTechnologie', $displayTechnologie);
    }

    /**
     * Update the specified DisplayTechnologie in storage.
     *
     * @param int $id
     * @param UpdateDisplayTechnologieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDisplayTechnologieRequest $request)
    {
        $displayTechnologie = $this->displayTechnologieRepository->find($id);

        if (empty($displayTechnologie)) {
            Flash::error('Display Technologie not found');

            return redirect(route('displayTechnologies.index'));
        }

        $displayTechnologie = $this->displayTechnologieRepository->update($request->all(), $id);

        Flash::success('Display Technologie updated successfully.');

        return redirect(route('displayTechnologies.index'));
    }

    /**
     * Remove the specified DisplayTechnologie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $displayTechnologie = $this->displayTechnologieRepository->find($id);

        if (empty($displayTechnologie)) {
            Flash::error('Display Technologie not found');

            return redirect(route('displayTechnologies.index'));
        }

        $this->displayTechnologieRepository->delete($id);

        Flash::success('Display Technologie deleted successfully.');

        return redirect(route('displayTechnologies.index'));
    }
}
