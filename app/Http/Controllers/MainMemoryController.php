<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMainMemoryRequest;
use App\Http\Requests\UpdateMainMemoryRequest;
use App\Repositories\MainMemoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MainMemoryController extends AppBaseController
{
    /** @var  MainMemoryRepository */
    private $mainMemoryRepository;

    public function __construct(MainMemoryRepository $mainMemoryRepo)
    {
        $this->mainMemoryRepository = $mainMemoryRepo;
    }

    /**
     * Display a listing of the MainMemory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mainMemories = $this->mainMemoryRepository->paginate('10');

        return view('main_memories.index')
            ->with('mainMemories', $mainMemories);
    }

    /**
     * Show the form for creating a new MainMemory.
     *
     * @return Response
     */
    public function create()
    {
        return view('main_memories.create');
    }

    /**
     * Store a newly created MainMemory in storage.
     *
     * @param CreateMainMemoryRequest $request
     *
     * @return Response
     */
    public function store(CreateMainMemoryRequest $request)
    {
        $input = $request->all();

        $mainMemory = $this->mainMemoryRepository->create($input);

        Flash::success('Main Memory saved successfully.');

        return redirect(route('mainMemories.index'));
    }

    /**
     * Display the specified MainMemory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mainMemory = $this->mainMemoryRepository->find($id);

        if (empty($mainMemory)) {
            Flash::error('Main Memory not found');

            return redirect(route('mainMemories.index'));
        }

        return view('main_memories.show')->with('mainMemory', $mainMemory);
    }

    /**
     * Show the form for editing the specified MainMemory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mainMemory = $this->mainMemoryRepository->find($id);

        if (empty($mainMemory)) {
            Flash::error('Main Memory not found');

            return redirect(route('mainMemories.index'));
        }

        return view('main_memories.edit')->with('mainMemory', $mainMemory);
    }

    /**
     * Update the specified MainMemory in storage.
     *
     * @param int $id
     * @param UpdateMainMemoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMainMemoryRequest $request)
    {
        $mainMemory = $this->mainMemoryRepository->find($id);

        if (empty($mainMemory)) {
            Flash::error('Main Memory not found');

            return redirect(route('mainMemories.index'));
        }

        $mainMemory = $this->mainMemoryRepository->update($request->all(), $id);

        Flash::success('Main Memory updated successfully.');

        return redirect(route('mainMemories.index'));
    }

    /**
     * Remove the specified MainMemory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mainMemory = $this->mainMemoryRepository->find($id);

        if (empty($mainMemory)) {
            Flash::error('Main Memory not found');

            return redirect(route('mainMemories.index'));
        }

        $this->mainMemoryRepository->delete($id);

        Flash::success('Main Memory deleted successfully.');

        return redirect(route('mainMemories.index'));
    }
}
