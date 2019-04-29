<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCPURequest;
use App\Http\Requests\UpdateCPURequest;
use App\Repositories\CPURepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CPUController extends AppBaseController
{
    /** @var  CPURepository */
    private $cPURepository;

    public function __construct(CPURepository $cPURepo)
    {
        $this->cPURepository = $cPURepo;
    }

    /**
     * Display a listing of the CPU.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cPUS = $this->cPURepository->paginate('10');

        return view('c_p_u_s.index')
            ->with('cPUS', $cPUS);
    }

    /**
     * Show the form for creating a new CPU.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_p_u_s.create');
    }

    /**
     * Store a newly created CPU in storage.
     *
     * @param CreateCPURequest $request
     *
     * @return Response
     */
    public function store(CreateCPURequest $request)
    {
        $input = $request->all();

        $cPU = $this->cPURepository->create($input);

        Flash::success('C P U saved successfully.');

        return redirect(route('cPUS.index'));
    }

    /**
     * Display the specified CPU.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cPU = $this->cPURepository->find($id);

        if (empty($cPU)) {
            Flash::error('C P U not found');

            return redirect(route('cPUS.index'));
        }

        return view('c_p_u_s.show')->with('cPU', $cPU);
    }

    /**
     * Show the form for editing the specified CPU.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cPU = $this->cPURepository->find($id);

        if (empty($cPU)) {
            Flash::error('C P U not found');

            return redirect(route('cPUS.index'));
        }

        return view('c_p_u_s.edit')->with('cPU', $cPU);
    }

    /**
     * Update the specified CPU in storage.
     *
     * @param int $id
     * @param UpdateCPURequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCPURequest $request)
    {
        $cPU = $this->cPURepository->find($id);

        if (empty($cPU)) {
            Flash::error('C P U not found');

            return redirect(route('cPUS.index'));
        }

        $cPU = $this->cPURepository->update($request->all(), $id);

        Flash::success('C P U updated successfully.');

        return redirect(route('cPUS.index'));
    }

    /**
     * Remove the specified CPU from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cPU = $this->cPURepository->find($id);

        if (empty($cPU)) {
            Flash::error('C P U not found');

            return redirect(route('cPUS.index'));
        }

        $this->cPURepository->delete($id);

        Flash::success('C P U deleted successfully.');

        return redirect(route('cPUS.index'));
    }
}
