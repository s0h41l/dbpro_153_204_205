<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeatureMessageRequest;
use App\Http\Requests\UpdateFeatureMessageRequest;
use App\Repositories\FeatureMessageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FeatureMessageController extends AppBaseController
{
    /** @var  FeatureMessageRepository */
    private $featureMessageRepository;

    public function __construct(FeatureMessageRepository $featureMessageRepo)
    {
        $this->featureMessageRepository = $featureMessageRepo;
    }

    /**
     * Display a listing of the FeatureMessage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $featureMessages = $this->featureMessageRepository->paginate('10');

        return view('feature_messages.index')
            ->with('featureMessages', $featureMessages);
    }

    /**
     * Show the form for creating a new FeatureMessage.
     *
     * @return Response
     */
    public function create()
    {
        return view('feature_messages.create');
    }

    /**
     * Store a newly created FeatureMessage in storage.
     *
     * @param CreateFeatureMessageRequest $request
     *
     * @return Response
     */
    public function store(CreateFeatureMessageRequest $request)
    {
        $input = $request->all();

        $featureMessage = $this->featureMessageRepository->create($input);

        Flash::success('Feature Message saved successfully.');

        return redirect(route('featureMessages.index'));
    }

    /**
     * Display the specified FeatureMessage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $featureMessage = $this->featureMessageRepository->find($id);

        if (empty($featureMessage)) {
            Flash::error('Feature Message not found');

            return redirect(route('featureMessages.index'));
        }

        return view('feature_messages.show')->with('featureMessage', $featureMessage);
    }

    /**
     * Show the form for editing the specified FeatureMessage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $featureMessage = $this->featureMessageRepository->find($id);

        if (empty($featureMessage)) {
            Flash::error('Feature Message not found');

            return redirect(route('featureMessages.index'));
        }

        return view('feature_messages.edit')->with('featureMessage', $featureMessage);
    }

    /**
     * Update the specified FeatureMessage in storage.
     *
     * @param int $id
     * @param UpdateFeatureMessageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeatureMessageRequest $request)
    {
        $featureMessage = $this->featureMessageRepository->find($id);

        if (empty($featureMessage)) {
            Flash::error('Feature Message not found');

            return redirect(route('featureMessages.index'));
        }

        $featureMessage = $this->featureMessageRepository->update($request->all(), $id);

        Flash::success('Feature Message updated successfully.');

        return redirect(route('featureMessages.index'));
    }

    /**
     * Remove the specified FeatureMessage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $featureMessage = $this->featureMessageRepository->find($id);

        if (empty($featureMessage)) {
            Flash::error('Feature Message not found');

            return redirect(route('featureMessages.index'));
        }

        $this->featureMessageRepository->delete($id);

        Flash::success('Feature Message deleted successfully.');

        return redirect(route('featureMessages.index'));
    }
}
