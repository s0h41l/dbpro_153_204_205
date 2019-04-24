<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThreegRequest;
use App\Http\Requests\UpdateThreegRequest;
use App\Repositories\ThreegRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ThreegController extends AppBaseController
{
    /** @var  ThreegRepository */
    private $threegRepository;

    public function __construct(ThreegRepository $threegRepo)
    {
        $this->threegRepository = $threegRepo;
    }

    /**
     * Display a listing of the Threeg.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $threegs = $this->threegRepository->all();

        return view('threegs.index')
            ->with('threegs', $threegs);
    }

    /**
     * Show the form for creating a new Threeg.
     *
     * @return Response
     */
    public function create()
    {
        return view('threegs.create');
    }

    /**
     * Store a newly created Threeg in storage.
     *
     * @param CreateThreegRequest $request
     *
     * @return Response
     */
    public function store(CreateThreegRequest $request)
    {
        $input = $request->all();

        $threeg = $this->threegRepository->create($input);

        Flash::success('Threeg saved successfully.');

        return redirect(route('threegs.index'));
    }

    /**
     * Display the specified Threeg.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $threeg = $this->threegRepository->find($id);

        if (empty($threeg)) {
            Flash::error('Threeg not found');

            return redirect(route('threegs.index'));
        }

        return view('threegs.show')->with('threeg', $threeg);
    }

    /**
     * Show the form for editing the specified Threeg.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $threeg = $this->threegRepository->find($id);

        if (empty($threeg)) {
            Flash::error('Threeg not found');

            return redirect(route('threegs.index'));
        }

        return view('threegs.edit')->with('threeg', $threeg);
    }

    /**
     * Update the specified Threeg in storage.
     *
     * @param int $id
     * @param UpdateThreegRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateThreegRequest $request)
    {
        $threeg = $this->threegRepository->find($id);

        if (empty($threeg)) {
            Flash::error('Threeg not found');

            return redirect(route('threegs.index'));
        }

        $threeg = $this->threegRepository->update($request->all(), $id);

        Flash::success('Threeg updated successfully.');

        return redirect(route('threegs.index'));
    }

    /**
     * Remove the specified Threeg from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $threeg = $this->threegRepository->find($id);

        if (empty($threeg)) {
            Flash::error('Threeg not found');

            return redirect(route('threegs.index'));
        }

        $this->threegRepository->delete($id);

        Flash::success('Threeg deleted successfully.');

        return redirect(route('threegs.index'));
    }
}
