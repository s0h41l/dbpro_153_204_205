<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFourGRequest;
use App\Http\Requests\UpdateFourGRequest;
use App\Repositories\FourGRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FourGController extends AppBaseController
{
    /** @var  FourGRepository */
    private $fourGRepository;

    public function __construct(FourGRepository $fourGRepo)
    {
        $this->fourGRepository = $fourGRepo;
    }

    /**
     * Display a listing of the FourG.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fourGs = $this->fourGRepository->all();

        return view('four_gs.index')
            ->with('fourGs', $fourGs);
    }

    /**
     * Show the form for creating a new FourG.
     *
     * @return Response
     */
    public function create()
    {
        return view('four_gs.create');
    }

    /**
     * Store a newly created FourG in storage.
     *
     * @param CreateFourGRequest $request
     *
     * @return Response
     */
    public function store(CreateFourGRequest $request)
    {
        $input = $request->all();

        $fourG = $this->fourGRepository->create($input);

        Flash::success('Four G saved successfully.');

        return redirect(route('fourGs.index'));
    }

    /**
     * Display the specified FourG.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fourG = $this->fourGRepository->find($id);

        if (empty($fourG)) {
            Flash::error('Four G not found');

            return redirect(route('fourGs.index'));
        }

        return view('four_gs.show')->with('fourG', $fourG);
    }

    /**
     * Show the form for editing the specified FourG.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fourG = $this->fourGRepository->find($id);

        if (empty($fourG)) {
            Flash::error('Four G not found');

            return redirect(route('fourGs.index'));
        }

        return view('four_gs.edit')->with('fourG', $fourG);
    }

    /**
     * Update the specified FourG in storage.
     *
     * @param int $id
     * @param UpdateFourGRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFourGRequest $request)
    {
        $fourG = $this->fourGRepository->find($id);

        if (empty($fourG)) {
            Flash::error('Four G not found');

            return redirect(route('fourGs.index'));
        }

        $fourG = $this->fourGRepository->update($request->all(), $id);

        Flash::success('Four G updated successfully.');

        return redirect(route('fourGs.index'));
    }

    /**
     * Remove the specified FourG from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fourG = $this->fourGRepository->find($id);

        if (empty($fourG)) {
            Flash::error('Four G not found');

            return redirect(route('fourGs.index'));
        }

        $this->fourGRepository->delete($id);

        Flash::success('Four G deleted successfully.');

        return redirect(route('fourGs.index'));
    }
}
