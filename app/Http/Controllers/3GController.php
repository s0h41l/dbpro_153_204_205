<?php

namespace App\Http\Controllers;

use App\Http\Requests\Create3GRequest;
use App\Http\Requests\Update3GRequest;
use App\Repositories\3GRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class 3GController extends AppBaseController
{
    /** @var  3GRepository */
    private $3GRepository;

    public function __construct(3GRepository $3GRepo)
    {
        $this->3GRepository = $3GRepo;
    }

    /**
     * Display a listing of the 3G.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $3GS = $this->3GRepository->all();

        return view('3_g_s.index')
            ->with('3GS', $3GS);
    }

    /**
     * Show the form for creating a new 3G.
     *
     * @return Response
     */
    public function create()
    {
        return view('3_g_s.create');
    }

    /**
     * Store a newly created 3G in storage.
     *
     * @param Create3GRequest $request
     *
     * @return Response
     */
    public function store(Create3GRequest $request)
    {
        $input = $request->all();

        $3G = $this->3GRepository->create($input);

        Flash::success('3 G saved successfully.');

        return redirect(route('3GS.index'));
    }

    /**
     * Display the specified 3G.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $3G = $this->3GRepository->find($id);

        if (empty($3G)) {
            Flash::error('3 G not found');

            return redirect(route('3GS.index'));
        }

        return view('3_g_s.show')->with('3G', $3G);
    }

    /**
     * Show the form for editing the specified 3G.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $3G = $this->3GRepository->find($id);

        if (empty($3G)) {
            Flash::error('3 G not found');

            return redirect(route('3GS.index'));
        }

        return view('3_g_s.edit')->with('3G', $3G);
    }

    /**
     * Update the specified 3G in storage.
     *
     * @param int $id
     * @param Update3GRequest $request
     *
     * @return Response
     */
    public function update($id, Update3GRequest $request)
    {
        $3G = $this->3GRepository->find($id);

        if (empty($3G)) {
            Flash::error('3 G not found');

            return redirect(route('3GS.index'));
        }

        $3G = $this->3GRepository->update($request->all(), $id);

        Flash::success('3 G updated successfully.');

        return redirect(route('3GS.index'));
    }

    /**
     * Remove the specified 3G from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $3G = $this->3GRepository->find($id);

        if (empty($3G)) {
            Flash::error('3 G not found');

            return redirect(route('3GS.index'));
        }

        $this->3GRepository->delete($id);

        Flash::success('3 G deleted successfully.');

        return redirect(route('3GS.index'));
    }
}
