<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOSRequest;
use App\Http\Requests\UpdateOSRequest;
use App\Repositories\OSRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OSController extends AppBaseController
{
    /** @var  OSRepository */
    private $oSRepository;

    public function __construct(OSRepository $oSRepo)
    {
        $this->oSRepository = $oSRepo;
    }

    /**
     * Display a listing of the OS.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $oSS = $this->oSRepository->paginate('10');

        return view('o_s_s.index')
            ->with('oSS', $oSS);
    }

    /**
     * Show the form for creating a new OS.
     *
     * @return Response
     */
    public function create()
    {
        return view('o_s_s.create');
    }

    /**
     * Store a newly created OS in storage.
     *
     * @param CreateOSRequest $request
     *
     * @return Response
     */
    public function store(CreateOSRequest $request)
    {
        $input = $request->all();

        $oS = $this->oSRepository->create($input);

        Flash::success('O S saved successfully.');

        return redirect(route('oSS.index'));
    }

    /**
     * Display the specified OS.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oS = $this->oSRepository->find($id);

        if (empty($oS)) {
            Flash::error('O S not found');

            return redirect(route('oSS.index'));
        }

        return view('o_s_s.show')->with('oS', $oS);
    }

    /**
     * Show the form for editing the specified OS.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oS = $this->oSRepository->find($id);

        if (empty($oS)) {
            Flash::error('O S not found');

            return redirect(route('oSS.index'));
        }

        return view('o_s_s.edit')->with('oS', $oS);
    }

    /**
     * Update the specified OS in storage.
     *
     * @param int $id
     * @param UpdateOSRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOSRequest $request)
    {
        $oS = $this->oSRepository->find($id);

        if (empty($oS)) {
            Flash::error('O S not found');

            return redirect(route('oSS.index'));
        }

        $oS = $this->oSRepository->update($request->all(), $id);

        Flash::success('O S updated successfully.');

        return redirect(route('oSS.index'));
    }

    /**
     * Remove the specified OS from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oS = $this->oSRepository->find($id);

        if (empty($oS)) {
            Flash::error('O S not found');

            return redirect(route('oSS.index'));
        }

        $this->oSRepository->delete($id);

        Flash::success('O S deleted successfully.');

        return redirect(route('oSS.index'));
    }
}
