<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTwoGRequest;
use App\Http\Requests\UpdateTwoGRequest;
use App\Repositories\TwoGRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TwoGController extends AppBaseController
{
    /** @var  TwoGRepository */
    private $twoGRepository;

    public function __construct(TwoGRepository $twoGRepo)
    {
        $this->twoGRepository = $twoGRepo;
    }

    /**
     * Display a listing of the TwoG.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $twoGs = $this->twoGRepository->paginate('10');

        return view('two_gs.index')
            ->with('twoGs', $twoGs);
    }

    /**
     * Show the form for creating a new TwoG.
     *
     * @return Response
     */
    public function create()
    {
        return view('two_gs.create');
    }

    /**
     * Store a newly created TwoG in storage.
     *
     * @param CreateTwoGRequest $request
     *
     * @return Response
     */
    public function store(CreateTwoGRequest $request)
    {
        $input = $request->all();

        $twoG = $this->twoGRepository->create($input);

        Flash::success('Two G saved successfully.');

        return redirect(route('twoGs.index'));
    }

    /**
     * Display the specified TwoG.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $twoG = $this->twoGRepository->find($id);

        if (empty($twoG)) {
            Flash::error('Two G not found');

            return redirect(route('twoGs.index'));
        }

        return view('two_gs.show')->with('twoG', $twoG);
    }

    /**
     * Show the form for editing the specified TwoG.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $twoG = $this->twoGRepository->find($id);

        if (empty($twoG)) {
            Flash::error('Two G not found');

            return redirect(route('twoGs.index'));
        }

        return view('two_gs.edit')->with('twoG', $twoG);
    }

    /**
     * Update the specified TwoG in storage.
     *
     * @param int $id
     * @param UpdateTwoGRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTwoGRequest $request)
    {
        $twoG = $this->twoGRepository->find($id);

        if (empty($twoG)) {
            Flash::error('Two G not found');

            return redirect(route('twoGs.index'));
        }

        $twoG = $this->twoGRepository->update($request->all(), $id);

        Flash::success('Two G updated successfully.');

        return redirect(route('twoGs.index'));
    }

    /**
     * Remove the specified TwoG from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $twoG = $this->twoGRepository->find($id);

        if (empty($twoG)) {
            Flash::error('Two G not found');

            return redirect(route('twoGs.index'));
        }

        $this->twoGRepository->delete($id);

        Flash::success('Two G deleted successfully.');

        return redirect(route('twoGs.index'));
    }
}
