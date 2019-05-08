<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChipSetRequest;
use App\Http\Requests\UpdateChipSetRequest;
use App\Repositories\ChipSetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ChipSetController extends AppBaseController
{
    /** @var  ChipSetRepository */
    private $chipSetRepository;

    public function __construct(ChipSetRepository $chipSetRepo)
    {
        $this->chipSetRepository = $chipSetRepo;
    }

    /**
     * Display a listing of the ChipSet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $chipSets = $this->chipSetRepository->paginate(10);


        return view('chip_sets.index')->with('chipSets', $chipSets);
    }

    /**
     * Show the form for creating a new ChipSet.
     *
     * @return Response
     */
    public function create()
    {
        return view('chip_sets.create');
    }

    /**
     * Store a newly created ChipSet in storage.
     *
     * @param CreateChipSetRequest $request
     *
     * @return Response
     */
    public function store(CreateChipSetRequest $request)
    {
        $input = $request->validate([
            'details'=> 'required|unique:chip_set|max:255',
        ]);
        $input = $request->all();
        $chipSet = $this->chipSetRepository->create($input);

        Flash::success('Chip Set saved successfully.');

        return redirect(route('chipSets.index'));
    }

    /**
     * Display the specified ChipSet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            Flash::error('Chip Set not found');

            return redirect(route('chipSets.index'));
        }

        return view('chip_sets.show')->with('chipSet', $chipSet);
    }

    /**
     * Show the form for editing the specified ChipSet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            Flash::error('Chip Set not found');

            return redirect(route('chipSets.index'));
        }

        return view('chip_sets.edit')->with('chipSet', $chipSet);
    }

    /**
     * Update the specified ChipSet in storage.
     *
     * @param int $id
     * @param UpdateChipSetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChipSetRequest $request)
    {
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            Flash::error('Chip Set not found');

            return redirect(route('chipSets.index'));
        }

        $chipSet = $this->chipSetRepository->update($request->all(), $id);

        Flash::success('Chip Set updated successfully.');

        return redirect(route('chipSets.index'));
    }

    /**
     * Remove the specified ChipSet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            Flash::error('Chip Set not found');

            return redirect(route('chipSets.index'));
        }

        $this->chipSetRepository->delete($id);

        Flash::success('Chip Set deleted successfully.');

        return redirect(route('chipSets.index'));
    }
}
