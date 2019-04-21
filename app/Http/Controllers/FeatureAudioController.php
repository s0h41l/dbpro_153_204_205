<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeatureAudioRequest;
use App\Http\Requests\UpdateFeatureAudioRequest;
use App\Repositories\FeatureAudioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FeatureAudioController extends AppBaseController
{
    /** @var  FeatureAudioRepository */
    private $featureAudioRepository;

    public function __construct(FeatureAudioRepository $featureAudioRepo)
    {
        $this->featureAudioRepository = $featureAudioRepo;
    }

    /**
     * Display a listing of the FeatureAudio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $featureAudios = $this->featureAudioRepository->all();

        return view('feature_audios.index')
            ->with('featureAudios', $featureAudios);
    }

    /**
     * Show the form for creating a new FeatureAudio.
     *
     * @return Response
     */
    public function create()
    {
        return view('feature_audios.create');
    }

    /**
     * Store a newly created FeatureAudio in storage.
     *
     * @param CreateFeatureAudioRequest $request
     *
     * @return Response
     */
    public function store(CreateFeatureAudioRequest $request)
    {
        $input = $request->all();

        $featureAudio = $this->featureAudioRepository->create($input);

        Flash::success('Feature Audio saved successfully.');

        return redirect(route('featureAudios.index'));
    }

    /**
     * Display the specified FeatureAudio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $featureAudio = $this->featureAudioRepository->find($id);

        if (empty($featureAudio)) {
            Flash::error('Feature Audio not found');

            return redirect(route('featureAudios.index'));
        }

        return view('feature_audios.show')->with('featureAudio', $featureAudio);
    }

    /**
     * Show the form for editing the specified FeatureAudio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $featureAudio = $this->featureAudioRepository->find($id);

        if (empty($featureAudio)) {
            Flash::error('Feature Audio not found');

            return redirect(route('featureAudios.index'));
        }

        return view('feature_audios.edit')->with('featureAudio', $featureAudio);
    }

    /**
     * Update the specified FeatureAudio in storage.
     *
     * @param int $id
     * @param UpdateFeatureAudioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeatureAudioRequest $request)
    {
        $featureAudio = $this->featureAudioRepository->find($id);

        if (empty($featureAudio)) {
            Flash::error('Feature Audio not found');

            return redirect(route('featureAudios.index'));
        }

        $featureAudio = $this->featureAudioRepository->update($request->all(), $id);

        Flash::success('Feature Audio updated successfully.');

        return redirect(route('featureAudios.index'));
    }

    /**
     * Remove the specified FeatureAudio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $featureAudio = $this->featureAudioRepository->find($id);

        if (empty($featureAudio)) {
            Flash::error('Feature Audio not found');

            return redirect(route('featureAudios.index'));
        }

        $this->featureAudioRepository->delete($id);

        Flash::success('Feature Audio deleted successfully.');

        return redirect(route('featureAudios.index'));
    }
}
