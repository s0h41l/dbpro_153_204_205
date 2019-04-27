<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBatterieRequest;
use App\Http\Requests\UpdateBatterieRequest;
use App\Repositories\BatterieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BatterieController extends AppBaseController
{
    /** @var  BatterieRepository */
    private $batterieRepository;

    public function __construct(BatterieRepository $batterieRepo)
    {
        $this->batterieRepository = $batterieRepo;
    }

    /**
     * Display a listing of the Batterie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batteries = $this->batterieRepository->paginate(30);

        return view('batteries.index')
            ->with('batteries', $batteries);
    }

    /**
     * Show the form for creating a new Batterie.
     *
     * @return Response
     */
    public function create()
    {
        return view('batteries.create');
    }

    /**
     * Store a newly created Batterie in storage.
     *
     * @param CreateBatterieRequest $request
     *
     * @return Response
     */
    public function store(CreateBatterieRequest $request)
    {
        $input = $request->all();

        $batterie = $this->batterieRepository->create($input);

        Flash::success('Batterie saved successfully.');

        return redirect(route('batteries.index'));
    }

    /**
     * Display the specified Batterie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $batterie = $this->batterieRepository->find($id);

        if (empty($batterie)) {
            Flash::error('Batterie not found');

            return redirect(route('batteries.index'));
        }

        return view('batteries.show')->with('batterie', $batterie);
    }

    /**
     * Show the form for editing the specified Batterie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $batterie = $this->batterieRepository->find($id);

        if (empty($batterie)) {
            Flash::error('Batterie not found');

            return redirect(route('batteries.index'));
        }

        return view('batteries.edit')->with('batterie', $batterie);
    }

    /**
     * Update the specified Batterie in storage.
     *
     * @param int $id
     * @param UpdateBatterieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBatterieRequest $request)
    {
        $batterie = $this->batterieRepository->find($id);

        if (empty($batterie)) {
            Flash::error('Batterie not found');

            return redirect(route('batteries.index'));
        }

        $batterie = $this->batterieRepository->update($request->all(), $id);

        Flash::success('Batterie updated successfully.');

        return redirect(route('batteries.index'));
    }

    /**
     * Remove the specified Batterie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $batterie = $this->batterieRepository->find($id);

        if (empty($batterie)) {
            Flash::error('Batterie not found');

            return redirect(route('batteries.index'));
        }

        $this->batterieRepository->delete($id);

        Flash::success('Batterie deleted successfully.');

        return redirect(route('batteries.index'));
    }
}
