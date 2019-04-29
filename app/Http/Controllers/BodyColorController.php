<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBodyColorRequest;
use App\Http\Requests\UpdateBodyColorRequest;
use App\Repositories\BodyColorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BodyColorController extends AppBaseController
{
    /** @var  BodyColorRepository */
    private $bodyColorRepository;

    public function __construct(BodyColorRepository $bodyColorRepo)
    {
        $this->bodyColorRepository = $bodyColorRepo;
    }

    /**
     * Display a listing of the BodyColor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bodyColors = $this->bodyColorRepository->paginate('10');

        return view('body_colors.index')
            ->with('bodyColors', $bodyColors);
    }

    /**
     * Show the form for creating a new BodyColor.
     *
     * @return Response
     */
    public function create()
    {
        return view('body_colors.create');
    }

    /**
     * Store a newly created BodyColor in storage.
     *
     * @param CreateBodyColorRequest $request
     *
     * @return Response
     */
    public function store(CreateBodyColorRequest $request)
    {
        $input = $request->all();

        $bodyColor = $this->bodyColorRepository->create($input);

        Flash::success('Body Color saved successfully.');

        return redirect(route('bodyColors.index'));
    }

    /**
     * Display the specified BodyColor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bodyColor = $this->bodyColorRepository->find($id);

        if (empty($bodyColor)) {
            Flash::error('Body Color not found');

            return redirect(route('bodyColors.index'));
        }

        return view('body_colors.show')->with('bodyColor', $bodyColor);
    }

    /**
     * Show the form for editing the specified BodyColor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bodyColor = $this->bodyColorRepository->find($id);

        if (empty($bodyColor)) {
            Flash::error('Body Color not found');

            return redirect(route('bodyColors.index'));
        }

        return view('body_colors.edit')->with('bodyColor', $bodyColor);
    }

    /**
     * Update the specified BodyColor in storage.
     *
     * @param int $id
     * @param UpdateBodyColorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBodyColorRequest $request)
    {
        $bodyColor = $this->bodyColorRepository->find($id);

        if (empty($bodyColor)) {
            Flash::error('Body Color not found');

            return redirect(route('bodyColors.index'));
        }

        $bodyColor = $this->bodyColorRepository->update($request->all(), $id);

        Flash::success('Body Color updated successfully.');

        return redirect(route('bodyColors.index'));
    }

    /**
     * Remove the specified BodyColor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bodyColor = $this->bodyColorRepository->find($id);

        if (empty($bodyColor)) {
            Flash::error('Body Color not found');

            return redirect(route('bodyColors.index'));
        }

        $this->bodyColorRepository->delete($id);

        Flash::success('Body Color deleted successfully.');

        return redirect(route('bodyColors.index'));
    }
}
