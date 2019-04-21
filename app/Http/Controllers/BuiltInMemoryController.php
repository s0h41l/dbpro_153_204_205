<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuiltInMemoryRequest;
use App\Http\Requests\UpdateBuiltInMemoryRequest;
use App\Repositories\BuiltInMemoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BuiltInMemoryController extends AppBaseController
{
    /** @var  BuiltInMemoryRepository */
    private $builtInMemoryRepository;

    public function __construct(BuiltInMemoryRepository $builtInMemoryRepo)
    {
        $this->builtInMemoryRepository = $builtInMemoryRepo;
    }

    /**
     * Display a listing of the BuiltInMemory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $builtInMemories = $this->builtInMemoryRepository->all();

        return view('built_in_memories.index')
            ->with('builtInMemories', $builtInMemories);
    }

    /**
     * Show the form for creating a new BuiltInMemory.
     *
     * @return Response
     */
    public function create()
    {
        return view('built_in_memories.create');
    }

    /**
     * Store a newly created BuiltInMemory in storage.
     *
     * @param CreateBuiltInMemoryRequest $request
     *
     * @return Response
     */
    public function store(CreateBuiltInMemoryRequest $request)
    {
        $input = $request->all();

        $builtInMemory = $this->builtInMemoryRepository->create($input);

        Flash::success('Built In Memory saved successfully.');

        return redirect(route('builtInMemories.index'));
    }

    /**
     * Display the specified BuiltInMemory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $builtInMemory = $this->builtInMemoryRepository->find($id);

        if (empty($builtInMemory)) {
            Flash::error('Built In Memory not found');

            return redirect(route('builtInMemories.index'));
        }

        return view('built_in_memories.show')->with('builtInMemory', $builtInMemory);
    }

    /**
     * Show the form for editing the specified BuiltInMemory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $builtInMemory = $this->builtInMemoryRepository->find($id);

        if (empty($builtInMemory)) {
            Flash::error('Built In Memory not found');

            return redirect(route('builtInMemories.index'));
        }

        return view('built_in_memories.edit')->with('builtInMemory', $builtInMemory);
    }

    /**
     * Update the specified BuiltInMemory in storage.
     *
     * @param int $id
     * @param UpdateBuiltInMemoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuiltInMemoryRequest $request)
    {
        $builtInMemory = $this->builtInMemoryRepository->find($id);

        if (empty($builtInMemory)) {
            Flash::error('Built In Memory not found');

            return redirect(route('builtInMemories.index'));
        }

        $builtInMemory = $this->builtInMemoryRepository->update($request->all(), $id);

        Flash::success('Built In Memory updated successfully.');

        return redirect(route('builtInMemories.index'));
    }

    /**
     * Remove the specified BuiltInMemory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $builtInMemory = $this->builtInMemoryRepository->find($id);

        if (empty($builtInMemory)) {
            Flash::error('Built In Memory not found');

            return redirect(route('builtInMemories.index'));
        }

        $this->builtInMemoryRepository->delete($id);

        Flash::success('Built In Memory deleted successfully.');

        return redirect(route('builtInMemories.index'));
    }
}
