<?php

namespace App\Http\Controllers;

use App\Http\Requests\Create2GRequest;
use App\Http\Requests\Update2GRequest;
use App\Repositories\2GRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class 2GController extends AppBaseController
{
    /** @var  2GRepository */
    private $2GRepository;

    public function __construct(2GRepository $2GRepo)
    {
        $this->2GRepository = $2GRepo;
    }

    /**
     * Display a listing of the 2G.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $2GS = $this->2GRepository->all();

        return view('2_g_s.index')
            ->with('2GS', $2GS);
    }

    /**
     * Show the form for creating a new 2G.
     *
     * @return Response
     */
    public function create()
    {
        return view('2_g_s.create');
    }

    /**
     * Store a newly created 2G in storage.
     *
     * @param Create2GRequest $request
     *
     * @return Response
     */
    public function store(Create2GRequest $request)
    {
        $input = $request->all();

        $2G = $this->2GRepository->create($input);

        Flash::success('2 G saved successfully.');

        return redirect(route('2GS.index'));
    }

    /**
     * Display the specified 2G.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $2G = $this->2GRepository->find($id);

        if (empty($2G)) {
            Flash::error('2 G not found');

            return redirect(route('2GS.index'));
        }

        return view('2_g_s.show')->with('2G', $2G);
    }

    /**
     * Show the form for editing the specified 2G.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $2G = $this->2GRepository->find($id);

        if (empty($2G)) {
            Flash::error('2 G not found');

            return redirect(route('2GS.index'));
        }

        return view('2_g_s.edit')->with('2G', $2G);
    }

    /**
     * Update the specified 2G in storage.
     *
     * @param int $id
     * @param Update2GRequest $request
     *
     * @return Response
     */
    public function update($id, Update2GRequest $request)
    {
        $2G = $this->2GRepository->find($id);

        if (empty($2G)) {
            Flash::error('2 G not found');

            return redirect(route('2GS.index'));
        }

        $2G = $this->2GRepository->update($request->all(), $id);

        Flash::success('2 G updated successfully.');

        return redirect(route('2GS.index'));
    }

    /**
     * Remove the specified 2G from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $2G = $this->2GRepository->find($id);

        if (empty($2G)) {
            Flash::error('2 G not found');

            return redirect(route('2GS.index'));
        }

        $this->2GRepository->delete($id);

        Flash::success('2 G deleted successfully.');

        return redirect(route('2GS.index'));
    }
}
