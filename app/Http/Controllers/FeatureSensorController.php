<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeatureSensorRequest;
use App\Http\Requests\UpdateFeatureSensorRequest;
use App\Repositories\FeatureSensorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FeatureSensorController extends AppBaseController
{
    /** @var  FeatureSensorRepository */
    private $featureSensorRepository;

    public function __construct(FeatureSensorRepository $featureSensorRepo)
    {
        $this->featureSensorRepository = $featureSensorRepo;
    }

    /**
     * Display a listing of the FeatureSensor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $featureSensors = $this->featureSensorRepository->paginate('10');

        return view('feature_sensors.index')
            ->with('featureSensors', $featureSensors);
    }

    /**
     * Show the form for creating a new FeatureSensor.
     *
     * @return Response
     */
    public function create()
    {
        return view('feature_sensors.create');
    }

    /**
     * Store a newly created FeatureSensor in storage.
     *
     * @param CreateFeatureSensorRequest $request
     *
     * @return Response
     */
    public function store(CreateFeatureSensorRequest $request)
    {
        $input = $request->all();

        $featureSensor = $this->featureSensorRepository->create($input);

        Flash::success('Feature Sensor saved successfully.');

        return redirect(route('featureSensors.index'));
    }

    /**
     * Display the specified FeatureSensor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $featureSensor = $this->featureSensorRepository->find($id);

        if (empty($featureSensor)) {
            Flash::error('Feature Sensor not found');

            return redirect(route('featureSensors.index'));
        }

        return view('feature_sensors.show')->with('featureSensor', $featureSensor);
    }

    /**
     * Show the form for editing the specified FeatureSensor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $featureSensor = $this->featureSensorRepository->find($id);

        if (empty($featureSensor)) {
            Flash::error('Feature Sensor not found');

            return redirect(route('featureSensors.index'));
        }

        return view('feature_sensors.edit')->with('featureSensor', $featureSensor);
    }

    /**
     * Update the specified FeatureSensor in storage.
     *
     * @param int $id
     * @param UpdateFeatureSensorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeatureSensorRequest $request)
    {
        $featureSensor = $this->featureSensorRepository->find($id);

        if (empty($featureSensor)) {
            Flash::error('Feature Sensor not found');

            return redirect(route('featureSensors.index'));
        }

        $featureSensor = $this->featureSensorRepository->update($request->all(), $id);

        Flash::success('Feature Sensor updated successfully.');

        return redirect(route('featureSensors.index'));
    }

    /**
     * Remove the specified FeatureSensor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $featureSensor = $this->featureSensorRepository->find($id);

        if (empty($featureSensor)) {
            Flash::error('Feature Sensor not found');

            return redirect(route('featureSensors.index'));
        }

        $this->featureSensorRepository->delete($id);

        Flash::success('Feature Sensor deleted successfully.');

        return redirect(route('featureSensors.index'));
    }
}
