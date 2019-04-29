<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUIRequest;
use App\Http\Requests\UpdateUIRequest;
use App\Repositories\UIRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UIController extends AppBaseController
{
    /** @var  UIRepository */
    private $uIRepository;

    public function __construct(UIRepository $uIRepo)
    {
        $this->uIRepository = $uIRepo;
    }

    /**
     * Display a listing of the UI.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uIS = $this->uIRepository->paginate('10');

        return view('u_i_s.index')
            ->with('uIS', $uIS);
    }

    /**
     * Show the form for creating a new UI.
     *
     * @return Response
     */
    public function create()
    {
        return view('u_i_s.create');
    }

    /**
     * Store a newly created UI in storage.
     *
     * @param CreateUIRequest $request
     *
     * @return Response
     */
    public function store(CreateUIRequest $request)
    {
        $input = $request->all();

        $uI = $this->uIRepository->create($input);

        Flash::success('U I saved successfully.');

        return redirect(route('uIS.index'));
    }

    /**
     * Display the specified UI.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uI = $this->uIRepository->find($id);

        if (empty($uI)) {
            Flash::error('U I not found');

            return redirect(route('uIS.index'));
        }

        return view('u_i_s.show')->with('uI', $uI);
    }

    /**
     * Show the form for editing the specified UI.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uI = $this->uIRepository->find($id);

        if (empty($uI)) {
            Flash::error('U I not found');

            return redirect(route('uIS.index'));
        }

        return view('u_i_s.edit')->with('uI', $uI);
    }

    /**
     * Update the specified UI in storage.
     *
     * @param int $id
     * @param UpdateUIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUIRequest $request)
    {
        $uI = $this->uIRepository->find($id);

        if (empty($uI)) {
            Flash::error('U I not found');

            return redirect(route('uIS.index'));
        }

        $uI = $this->uIRepository->update($request->all(), $id);

        Flash::success('U I updated successfully.');

        return redirect(route('uIS.index'));
    }

    /**
     * Remove the specified UI from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uI = $this->uIRepository->find($id);

        if (empty($uI)) {
            Flash::error('U I not found');

            return redirect(route('uIS.index'));
        }

        $this->uIRepository->delete($id);

        Flash::success('U I deleted successfully.');

        return redirect(route('uIS.index'));
    }
}
