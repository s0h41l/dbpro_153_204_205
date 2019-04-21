<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateChipSetAPIRequest;
use App\Http\Requests\API\UpdateChipSetAPIRequest;
use App\Models\ChipSet;
use App\Repositories\ChipSetRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ChipSetController
 * @package App\Http\Controllers\API
 */

class ChipSetAPIController extends AppBaseController
{
    /** @var  ChipSetRepository */
    private $chipSetRepository;

    public function __construct(ChipSetRepository $chipSetRepo)
    {
        $this->chipSetRepository = $chipSetRepo;
    }

    /**
     * Display a listing of the ChipSet.
     * GET|HEAD /chipSets
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $chipSets = $this->chipSetRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($chipSets->toArray(), 'Chip Sets retrieved successfully');
    }

    /**
     * Store a newly created ChipSet in storage.
     * POST /chipSets
     *
     * @param CreateChipSetAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateChipSetAPIRequest $request)
    {
        $input = $request->all();

        $chipSet = $this->chipSetRepository->create($input);

        return $this->sendResponse($chipSet->toArray(), 'Chip Set saved successfully');
    }

    /**
     * Display the specified ChipSet.
     * GET|HEAD /chipSets/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ChipSet $chipSet */
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            return $this->sendError('Chip Set not found');
        }

        return $this->sendResponse($chipSet->toArray(), 'Chip Set retrieved successfully');
    }

    /**
     * Update the specified ChipSet in storage.
     * PUT/PATCH /chipSets/{id}
     *
     * @param int $id
     * @param UpdateChipSetAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChipSetAPIRequest $request)
    {
        $input = $request->all();

        /** @var ChipSet $chipSet */
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            return $this->sendError('Chip Set not found');
        }

        $chipSet = $this->chipSetRepository->update($input, $id);

        return $this->sendResponse($chipSet->toArray(), 'ChipSet updated successfully');
    }

    /**
     * Remove the specified ChipSet from storage.
     * DELETE /chipSets/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ChipSet $chipSet */
        $chipSet = $this->chipSetRepository->find($id);

        if (empty($chipSet)) {
            return $this->sendError('Chip Set not found');
        }

        $chipSet->delete();

        return $this->sendResponse($id, 'Chip Set deleted successfully');
    }
}
