<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFrequencyRequest;
use App\Http\Requests\UpdateFrequencyRequest;
use App\Repositories\FrequencyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FrequencyController extends AppBaseController
{
    /** @var  FrequencyRepository */
    private $frequencyRepository;

    public function __construct(FrequencyRepository $frequencyRepo)
    {
        $this->frequencyRepository = $frequencyRepo;
    }

    /**
     * Display a listing of the Frequency.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $frequencies = $this->frequencyRepository->all();

        return view('frequencies.index')
            ->with('frequencies', $frequencies);
    }

    /**
     * Show the form for creating a new Frequency.
     *
     * @return Response
     */
    public function create()
    {
        return view('frequencies.create');
    }

    /**
     * Store a newly created Frequency in storage.
     *
     * @param CreateFrequencyRequest $request
     *
     * @return Response
     */
    public function store(CreateFrequencyRequest $request)
    {
        $input = $request->all();

        $frequency = $this->frequencyRepository->create($input);

        Flash::success('Frequency saved successfully.');

        return redirect(route('frequencies.index'));
    }

    /**
     * Display the specified Frequency.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $frequency = $this->frequencyRepository->find($id);

        if (empty($frequency)) {
            Flash::error('Frequency not found');

            return redirect(route('frequencies.index'));
        }

        return view('frequencies.show')->with('frequency', $frequency);
    }

    /**
     * Show the form for editing the specified Frequency.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $frequency = $this->frequencyRepository->find($id);

        if (empty($frequency)) {
            Flash::error('Frequency not found');

            return redirect(route('frequencies.index'));
        }

        return view('frequencies.edit')->with('frequency', $frequency);
    }

    /**
     * Update the specified Frequency in storage.
     *
     * @param int $id
     * @param UpdateFrequencyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFrequencyRequest $request)
    {
        $frequency = $this->frequencyRepository->find($id);

        if (empty($frequency)) {
            Flash::error('Frequency not found');

            return redirect(route('frequencies.index'));
        }

        $frequency = $this->frequencyRepository->update($request->all(), $id);

        Flash::success('Frequency updated successfully.');

        return redirect(route('frequencies.index'));
    }

    /**
     * Remove the specified Frequency from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $frequency = $this->frequencyRepository->find($id);

        if (empty($frequency)) {
            Flash::error('Frequency not found');

            return redirect(route('frequencies.index'));
        }

        $this->frequencyRepository->delete($id);

        Flash::success('Frequency deleted successfully.');

        return redirect(route('frequencies.index'));
    }
}
