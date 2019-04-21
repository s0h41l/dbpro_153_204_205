<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUSBRequest;
use App\Http\Requests\UpdateUSBRequest;
use App\Repositories\USBRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class USBController extends AppBaseController
{
    /** @var  USBRepository */
    private $uSBRepository;

    public function __construct(USBRepository $uSBRepo)
    {
        $this->uSBRepository = $uSBRepo;
    }

    /**
     * Display a listing of the USB.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uSBS = $this->uSBRepository->all();

        return view('u_s_b_s.index')
            ->with('uSBS', $uSBS);
    }

    /**
     * Show the form for creating a new USB.
     *
     * @return Response
     */
    public function create()
    {
        return view('u_s_b_s.create');
    }

    /**
     * Store a newly created USB in storage.
     *
     * @param CreateUSBRequest $request
     *
     * @return Response
     */
    public function store(CreateUSBRequest $request)
    {
        $input = $request->all();

        $uSB = $this->uSBRepository->create($input);

        Flash::success('U S B saved successfully.');

        return redirect(route('uSBS.index'));
    }

    /**
     * Display the specified USB.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uSB = $this->uSBRepository->find($id);

        if (empty($uSB)) {
            Flash::error('U S B not found');

            return redirect(route('uSBS.index'));
        }

        return view('u_s_b_s.show')->with('uSB', $uSB);
    }

    /**
     * Show the form for editing the specified USB.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uSB = $this->uSBRepository->find($id);

        if (empty($uSB)) {
            Flash::error('U S B not found');

            return redirect(route('uSBS.index'));
        }

        return view('u_s_b_s.edit')->with('uSB', $uSB);
    }

    /**
     * Update the specified USB in storage.
     *
     * @param int $id
     * @param UpdateUSBRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUSBRequest $request)
    {
        $uSB = $this->uSBRepository->find($id);

        if (empty($uSB)) {
            Flash::error('U S B not found');

            return redirect(route('uSBS.index'));
        }

        $uSB = $this->uSBRepository->update($request->all(), $id);

        Flash::success('U S B updated successfully.');

        return redirect(route('uSBS.index'));
    }

    /**
     * Remove the specified USB from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uSB = $this->uSBRepository->find($id);

        if (empty($uSB)) {
            Flash::error('U S B not found');

            return redirect(route('uSBS.index'));
        }

        $this->uSBRepository->delete($id);

        Flash::success('U S B deleted successfully.');

        return redirect(route('uSBS.index'));
    }
}
