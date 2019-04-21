<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrowserRequest;
use App\Http\Requests\UpdateBrowserRequest;
use App\Repositories\BrowserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BrowserController extends AppBaseController
{
    /** @var  BrowserRepository */
    private $browserRepository;

    public function __construct(BrowserRepository $browserRepo)
    {
        $this->browserRepository = $browserRepo;
    }

    /**
     * Display a listing of the Browser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $browsers = $this->browserRepository->all();

        return view('browsers.index')
            ->with('browsers', $browsers);
    }

    /**
     * Show the form for creating a new Browser.
     *
     * @return Response
     */
    public function create()
    {
        return view('browsers.create');
    }

    /**
     * Store a newly created Browser in storage.
     *
     * @param CreateBrowserRequest $request
     *
     * @return Response
     */
    public function store(CreateBrowserRequest $request)
    {
        $input = $request->all();

        $browser = $this->browserRepository->create($input);

        Flash::success('Browser saved successfully.');

        return redirect(route('browsers.index'));
    }

    /**
     * Display the specified Browser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $browser = $this->browserRepository->find($id);

        if (empty($browser)) {
            Flash::error('Browser not found');

            return redirect(route('browsers.index'));
        }

        return view('browsers.show')->with('browser', $browser);
    }

    /**
     * Show the form for editing the specified Browser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $browser = $this->browserRepository->find($id);

        if (empty($browser)) {
            Flash::error('Browser not found');

            return redirect(route('browsers.index'));
        }

        return view('browsers.edit')->with('browser', $browser);
    }

    /**
     * Update the specified Browser in storage.
     *
     * @param int $id
     * @param UpdateBrowserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBrowserRequest $request)
    {
        $browser = $this->browserRepository->find($id);

        if (empty($browser)) {
            Flash::error('Browser not found');

            return redirect(route('browsers.index'));
        }

        $browser = $this->browserRepository->update($request->all(), $id);

        Flash::success('Browser updated successfully.');

        return redirect(route('browsers.index'));
    }

    /**
     * Remove the specified Browser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $browser = $this->browserRepository->find($id);

        if (empty($browser)) {
            Flash::error('Browser not found');

            return redirect(route('browsers.index'));
        }

        $this->browserRepository->delete($id);

        Flash::success('Browser deleted successfully.');

        return redirect(route('browsers.index'));
    }
}
