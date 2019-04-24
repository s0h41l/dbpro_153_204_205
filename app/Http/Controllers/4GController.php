<?php

namespace App\Http\Controllers;

use App\Http\Requests\Create4GRequest;
use App\Http\Requests\Update4GRequest;
use App\Repositories\4GRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class 4GController extends AppBaseController
{
    /** @var  4GRepository */
    private $4GRepository;

    public function __construct(4GRepository $4GRepo)
    {
        $this->4GRepository = $4GRepo;
    }

    /**
     * Display a listing of the 4G.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $4GS = $this->4GRepository->all();

        return view('4_g_s.index')
            ->with('4GS', $4GS);
    }

    /**
     * Show the form for creating a new 4G.
     *
     * @return Response
     */
    public function create()
    {
        return view('4_g_s.create');
    }

    /**
     * Store a newly created 4G in storage.
     *
     * @param Create4GRequest $request
     *
     * @return Response
     */
    public function store(Create4GRequest $request)
    {
        $input = $request->all();

        $4G = $this->4GRepository->create($input);

        Flash::success('4 G saved successfully.');

        return redirect(route('4GS.index'));
    }

    /**
     * Display the specified 4G.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $4G = $this->4GRepository->find($id);

        if (empty($4G)) {
            Flash::error('4 G not found');

            return redirect(route('4GS.index'));
        }

        return view('4_g_s.show')->with('4G', $4G);
    }

    /**
     * Show the form for editing the specified 4G.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $4G = $this->4GRepository->find($id);

        if (empty($4G)) {
            Flash::error('4 G not found');

            return redirect(route('4GS.index'));
        }

        return view('4_g_s.edit')->with('4G', $4G);
    }

    /**
     * Update the specified 4G in storage.
     *
     * @param int $id
     * @param Update4GRequest $request
     *
     * @return Response
     */
    public function update($id, Update4GRequest $request)
    {
        $4G = $this->4GRepository->find($id);

        if (empty($4G)) {
            Flash::error('4 G not found');

            return redirect(route('4GS.index'));
        }

        $4G = $this->4GRepository->update($request->all(), $id);

        Flash::success('4 G updated successfully.');

        return redirect(route('4GS.index'));
    }

    /**
     * Remove the specified 4G from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $4G = $this->4GRepository->find($id);

        if (empty($4G)) {
            Flash::error('4 G not found');

            return redirect(route('4GS.index'));
        }

        $this->4GRepository->delete($id);

        Flash::success('4 G deleted successfully.');

        return redirect(route('4GS.index'));
    }
}
