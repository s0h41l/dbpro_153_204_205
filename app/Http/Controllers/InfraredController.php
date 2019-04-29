<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInfraredRequest;
use App\Http\Requests\UpdateInfraredRequest;
use App\Repositories\InfraredRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InfraredController extends AppBaseController
{
    /** @var  InfraredRepository */
    private $infraredRepository;

    public function __construct(InfraredRepository $infraredRepo)
    {
        $this->infraredRepository = $infraredRepo;
    }

    /**
     * Display a listing of the Infrared.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $infrareds = $this->infraredRepository->paginate('10');

        return view('infrareds.index')
            ->with('infrareds', $infrareds);
    }

    /**
     * Show the form for creating a new Infrared.
     *
     * @return Response
     */
    public function create()
    {
        return view('infrareds.create');
    }

    /**
     * Store a newly created Infrared in storage.
     *
     * @param CreateInfraredRequest $request
     *
     * @return Response
     */
    public function store(CreateInfraredRequest $request)
    {
        $input = $request->all();

        $infrared = $this->infraredRepository->create($input);

        Flash::success('Infrared saved successfully.');

        return redirect(route('infrareds.index'));
    }

    /**
     * Display the specified Infrared.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infrared = $this->infraredRepository->find($id);

        if (empty($infrared)) {
            Flash::error('Infrared not found');

            return redirect(route('infrareds.index'));
        }

        return view('infrareds.show')->with('infrared', $infrared);
    }

    /**
     * Show the form for editing the specified Infrared.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infrared = $this->infraredRepository->find($id);

        if (empty($infrared)) {
            Flash::error('Infrared not found');

            return redirect(route('infrareds.index'));
        }

        return view('infrareds.edit')->with('infrared', $infrared);
    }

    /**
     * Update the specified Infrared in storage.
     *
     * @param int $id
     * @param UpdateInfraredRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInfraredRequest $request)
    {
        $infrared = $this->infraredRepository->find($id);

        if (empty($infrared)) {
            Flash::error('Infrared not found');

            return redirect(route('infrareds.index'));
        }

        $infrared = $this->infraredRepository->update($request->all(), $id);

        Flash::success('Infrared updated successfully.');

        return redirect(route('infrareds.index'));
    }

    /**
     * Remove the specified Infrared from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $infrared = $this->infraredRepository->find($id);

        if (empty($infrared)) {
            Flash::error('Infrared not found');

            return redirect(route('infrareds.index'));
        }

        $this->infraredRepository->delete($id);

        Flash::success('Infrared deleted successfully.');

        return redirect(route('infrareds.index'));
    }
}
