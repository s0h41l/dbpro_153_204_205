<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDimensionRequest;
use App\Http\Requests\UpdateDimensionRequest;
use App\Repositories\DimensionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DimensionController extends AppBaseController
{
    /** @var  DimensionRepository */
    private $dimensionRepository;

    public function __construct(DimensionRepository $dimensionRepo)
    {
        $this->dimensionRepository = $dimensionRepo;
    }

    /**
     * Display a listing of the Dimension.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dimensions = $this->dimensionRepository->all();

        return view('dimensions.index')
            ->with('dimensions', $dimensions);
    }

    /**
     * Show the form for creating a new Dimension.
     *
     * @return Response
     */
    public function create()
    {
        return view('dimensions.create');
    }

    /**
     * Store a newly created Dimension in storage.
     *
     * @param CreateDimensionRequest $request
     *
     * @return Response
     */
    public function store(CreateDimensionRequest $request)
    {
        $input = $request->all();

        $dimension = $this->dimensionRepository->create($input);

        Flash::success('Dimension saved successfully.');

        return redirect(route('dimensions.index'));
    }

    /**
     * Display the specified Dimension.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dimension = $this->dimensionRepository->find($id);

        if (empty($dimension)) {
            Flash::error('Dimension not found');

            return redirect(route('dimensions.index'));
        }

        return view('dimensions.show')->with('dimension', $dimension);
    }

    /**
     * Show the form for editing the specified Dimension.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dimension = $this->dimensionRepository->find($id);

        if (empty($dimension)) {
            Flash::error('Dimension not found');

            return redirect(route('dimensions.index'));
        }

        return view('dimensions.edit')->with('dimension', $dimension);
    }

    /**
     * Update the specified Dimension in storage.
     *
     * @param int $id
     * @param UpdateDimensionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDimensionRequest $request)
    {
        $dimension = $this->dimensionRepository->find($id);

        if (empty($dimension)) {
            Flash::error('Dimension not found');

            return redirect(route('dimensions.index'));
        }

        $dimension = $this->dimensionRepository->update($request->all(), $id);

        Flash::success('Dimension updated successfully.');

        return redirect(route('dimensions.index'));
    }

    /**
     * Remove the specified Dimension from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dimension = $this->dimensionRepository->find($id);

        if (empty($dimension)) {
            Flash::error('Dimension not found');

            return redirect(route('dimensions.index'));
        }

        $this->dimensionRepository->delete($id);

        Flash::success('Dimension deleted successfully.');

        return redirect(route('dimensions.index'));
    }
}
