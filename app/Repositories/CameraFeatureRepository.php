<?php

namespace App\Repositories;

use App\Models\CameraFeature;
use App\Repositories\BaseRepository;

/**
 * Class CameraFeatureRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:21 am UTC
*/

class CameraFeatureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'details'
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
        return CameraFeature::class;
    }
}
