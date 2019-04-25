<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSDRequest;
use App\Http\Requests\UpdateSDRequest;
use App\Repositories\SDRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SDController extends AppBaseController
{
    /** @var  SDRepository */
    private $sDRepository;

    public function __construct(SDRepository $sDRepo)
    {
        $this->sDRepository = $sDRepo;
    }

    /**
     * Display a listing of the SD.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sDS = $this->sDRepository->all();

        return view('s_d_s.index')
            ->with('sDS', $sDS);
    }

    /**
     * Show the form for creating a new SD.
     *
     * @return Response
     */
    public function create()
    {
        return view('s_d_s.create');
    }

    /**
     * Store a newly created SD in storage.
     *
     * @param CreateSDRequest $request
     *
     * @return Response
     */
    public function store(CreateSDRequest $request)
    {
        $input = $request->all();

        $sD = $this->sDRepository->create($input);

        Flash::success('S D saved successfully.');

        return redirect(route('sDS.index'));
    }

    /**
     * Display the specified SD.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sD = $this->sDRepository->find($id);

        if (empty($sD)) {
            Flash::error('S D not found');

            return redirect(route('sDS.index'));
        }

        return view('s_d_s.show')->with('sD', $sD);
    }

    /**
     * Show the form for editing the specified SD.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sD = $this->sDRepository->find($id);

        if (empty($sD)) {
            Flash::error('S D not found');

            return redirect(route('sDS.index'));
        }

        return view('s_d_s.edit')->with('sD', $sD);
    }

    /**
     * Update the specified SD in storage.
     *
     * @param int $id
     * @param UpdateSDRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSDRequest $request)
    {
        $sD = $this->sDRepository->find($id);

        if (empty($sD)) {
            Flash::error('S D not found');

            return redirect(route('sDS.index'));
        }

        $sD = $this->sDRepository->update($request->all(), $id);

        Flash::success('S D updated successfully.');

        return redirect(route('sDS.index'));
    }

    /**
     * Remove the specified SD from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sD = $this->sDRepository->find($id);

        if (empty($sD)) {
            Flash::error('S D not found');

            return redirect(route('sDS.index'));
        }

        $this->sDRepository->delete($id);

        Flash::success('S D deleted successfully.');

        return redirect(route('sDS.index'));
    }
}
