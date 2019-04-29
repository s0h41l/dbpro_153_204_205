<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNFCRequest;
use App\Http\Requests\UpdateNFCRequest;
use App\Repositories\NFCRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NFCController extends AppBaseController
{
    /** @var  NFCRepository */
    private $nFCRepository;

    public function __construct(NFCRepository $nFCRepo)
    {
        $this->nFCRepository = $nFCRepo;
    }

    /**
     * Display a listing of the NFC.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nFCS = $this->nFCRepository->paginate('10');

        return view('n_f_c_s.index')
            ->with('nFCS', $nFCS);
    }

    /**
     * Show the form for creating a new NFC.
     *
     * @return Response
     */
    public function create()
    {
        return view('n_f_c_s.create');
    }

    /**
     * Store a newly created NFC in storage.
     *
     * @param CreateNFCRequest $request
     *
     * @return Response
     */
    public function store(CreateNFCRequest $request)
    {
        $input = $request->all();

        $nFC = $this->nFCRepository->create($input);

        Flash::success('N F C saved successfully.');

        return redirect(route('nFCS.index'));
    }

    /**
     * Display the specified NFC.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nFC = $this->nFCRepository->find($id);

        if (empty($nFC)) {
            Flash::error('N F C not found');

            return redirect(route('nFCS.index'));
        }

        return view('n_f_c_s.show')->with('nFC', $nFC);
    }

    /**
     * Show the form for editing the specified NFC.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nFC = $this->nFCRepository->find($id);

        if (empty($nFC)) {
            Flash::error('N F C not found');

            return redirect(route('nFCS.index'));
        }

        return view('n_f_c_s.edit')->with('nFC', $nFC);
    }

    /**
     * Update the specified NFC in storage.
     *
     * @param int $id
     * @param UpdateNFCRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNFCRequest $request)
    {
        $nFC = $this->nFCRepository->find($id);

        if (empty($nFC)) {
            Flash::error('N F C not found');

            return redirect(route('nFCS.index'));
        }

        $nFC = $this->nFCRepository->update($request->all(), $id);

        Flash::success('N F C updated successfully.');

        return redirect(route('nFCS.index'));
    }

    /**
     * Remove the specified NFC from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nFC = $this->nFCRepository->find($id);

        if (empty($nFC)) {
            Flash::error('N F C not found');

            return redirect(route('nFCS.index'));
        }

        $this->nFCRepository->delete($id);

        Flash::success('N F C deleted successfully.');

        return redirect(route('nFCS.index'));
    }
}
