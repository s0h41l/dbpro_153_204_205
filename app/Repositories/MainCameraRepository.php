<?php

namespace App\Repositories;

use App\Models\MainCamera;
use App\Repositories\BaseRepository;

/**
 * Class MainCameraRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:27 am UTC
*/

class MainCameraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'details',
        'mega_pixels'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MainCamera::class;
    }
}
