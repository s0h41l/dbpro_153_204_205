<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSimRequest;
use App\Http\Requests\UpdateSimRequest;
use App\Repositories\SimRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SimController extends AppBaseController
{
    /** @var  SimRepository */
    private $simRepository;

    public function __construct(SimRepository $simRepo)
    {
        $this->simRepository = $simRepo;
    }

    /**
     * Display a listing of the Sim.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sims = $this->simRepository->all();

        return view('sims.index')
            ->with('sims', $sims);
    }

    /**
     * Show the form for creating a new Sim.
     *
     * @return Response
     */
    public function create()
    {
        return view('sims.create');
    }

    /**
     * Store a newly created Sim in storage.
     *
     * @param CreateSimRequest $request
     *
     * @return Response
     */
    public function store(CreateSimRequest $request)
    {
        $input = $request->all();

        $sim = $this->simRepository->create($input);

        Flash::success('Sim saved successfully.');

        return redirect(route('sims.index'));
    }

    /**
     * Display the specified Sim.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sim = $this->simRepository->find($id);

        if (empty($sim)) {
            Flash::error('Sim not found');

            return redirect(route('sims.index'));
        }

        return view('sims.show')->with('sim', $sim);
    }

    /**
     * Show the form for editing the specified Sim.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sim = $this->simRepository->find($id);

        if (empty($sim)) {
            Flash::error('Sim not found');

            return redirect(route('sims.index'));
        }

        return view('sims.edit')->with('sim', $sim);
    }

    /**
     * Update the specified Sim in storage.
     *
     * @param int $id
     * @param UpdateSimRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSimRequest $request)
    {
        $sim = $this->simRepository->find($id);

        if (empty($sim)) {
            Flash::error('Sim not found');

            return redirect(route('sims.index'));
        }

        $sim = $this->simRepository->update($request->all(), $id);

        Flash::success('Sim updated successfully.');

        return redirect(route('sims.index'));
    }

    /**
     * Remove the specified Sim from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sim = $this->simRepository->find($id);

        if (empty($sim)) {
            Flash::error('Sim not found');

            return redirect(route('sims.index'));
        }

        $this->simRepository->delete($id);

        Flash::success('Sim deleted successfully.');

        return redirect(route('sims.index'));
    }
}
