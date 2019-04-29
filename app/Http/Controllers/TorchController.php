<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTorchRequest;
use App\Http\Requests\UpdateTorchRequest;
use App\Repositories\TorchRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TorchController extends AppBaseController
{
    /** @var  TorchRepository */
    private $torchRepository;

    public function __construct(TorchRepository $torchRepo)
    {
        $this->torchRepository = $torchRepo;
    }

    /**
     * Display a listing of the Torch.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $torches = $this->torchRepository->paginate('10');

        return view('torches.index')
            ->with('torches', $torches);
    }

    /**
     * Show the form for creating a new Torch.
     *
     * @return Response
     */
    public function create()
    {
        return view('torches.create');
    }

    /**
     * Store a newly created Torch in storage.
     *
     * @param CreateTorchRequest $request
     *
     * @return Response
     */
    public function store(CreateTorchRequest $request)
    {
        $input = $request->all();

        $torch = $this->torchRepository->create($input);

        Flash::success('Torch saved successfully.');

        return redirect(route('torches.index'));
    }

    /**
     * Display the specified Torch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $torch = $this->torchRepository->find($id);

        if (empty($torch)) {
            Flash::error('Torch not found');

            return redirect(route('torches.index'));
        }

        return view('torches.show')->with('torch', $torch);
    }

    /**
     * Show the form for editing the specified Torch.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $torch = $this->torchRepository->find($id);

        if (empty($torch)) {
            Flash::error('Torch not found');

            return redirect(route('torches.index'));
        }

        return view('torches.edit')->with('torch', $torch);
    }

    /**
     * Update the specified Torch in storage.
     *
     * @param int $id
     * @param UpdateTorchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTorchRequest $request)
    {
        $torch = $this->torchRepository->find($id);

        if (empty($torch)) {
            Flash::error('Torch not found');

            return redirect(route('torches.index'));
        }

        $torch = $this->torchRepository->update($request->all(), $id);

        Flash::success('Torch updated successfully.');

        return redirect(route('torches.index'));
    }

    /**
     * Remove the specified Torch from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $torch = $this->torchRepository->find($id);

        if (empty($torch)) {
            Flash::error('Torch not found');

            return redirect(route('torches.index'));
        }

        $this->torchRepository->delete($id);

        Flash::success('Torch deleted successfully.');

        return redirect(route('torches.index'));
    }
}
