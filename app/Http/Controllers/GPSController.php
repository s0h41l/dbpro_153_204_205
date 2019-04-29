<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGPSRequest;
use App\Http\Requests\UpdateGPSRequest;
use App\Repositories\GPSRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GPSController extends AppBaseController
{
    /** @var  GPSRepository */
    private $gPSRepository;

    public function __construct(GPSRepository $gPSRepo)
    {
        $this->gPSRepository = $gPSRepo;
    }

    /**
     * Display a listing of the GPS.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gPSS = $this->gPSRepository->paginate('10');

        return view('g_p_s_s.index')
            ->with('gPSS', $gPSS);
    }

    /**
     * Show the form for creating a new GPS.
     *
     * @return Response
     */
    public function create()
    {
        return view('g_p_s_s.create');
    }

    /**
     * Store a newly created GPS in storage.
     *
     * @param CreateGPSRequest $request
     *
     * @return Response
     */
    public function store(CreateGPSRequest $request)
    {
        $input = $request->all();

        $gPS = $this->gPSRepository->create($input);

        Flash::success('G P S saved successfully.');

        return redirect(route('gPSS.index'));
    }

    /**
     * Display the specified GPS.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gPS = $this->gPSRepository->find($id);

        if (empty($gPS)) {
            Flash::error('G P S not found');

            return redirect(route('gPSS.index'));
        }

        return view('g_p_s_s.show')->with('gPS', $gPS);
    }

    /**
     * Show the form for editing the specified GPS.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gPS = $this->gPSRepository->find($id);

        if (empty($gPS)) {
            Flash::error('G P S not found');

            return redirect(route('gPSS.index'));
        }

        return view('g_p_s_s.edit')->with('gPS', $gPS);
    }

    /**
     * Update the specified GPS in storage.
     *
     * @param int $id
     * @param UpdateGPSRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGPSRequest $request)
    {
        $gPS = $this->gPSRepository->find($id);

        if (empty($gPS)) {
            Flash::error('G P S not found');

            return redirect(route('gPSS.index'));
        }

        $gPS = $this->gPSRepository->update($request->all(), $id);

        Flash::success('G P S updated successfully.');

        return redirect(route('gPSS.index'));
    }

    /**
     * Remove the specified GPS from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gPS = $this->gPSRepository->find($id);

        if (empty($gPS)) {
            Flash::error('G P S not found');

            return redirect(route('gPSS.index'));
        }

        $this->gPSRepository->delete($id);

        Flash::success('G P S deleted successfully.');

        return redirect(route('gPSS.index'));
    }
}
