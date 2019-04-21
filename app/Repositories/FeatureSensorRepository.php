<?php

namespace App\Repositories;

use App\Models\FeatureSensor;
use App\Repositories\BaseRepository;

/**
 * Class FeatureSensorRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:23 am UTC
*/

class FeatureSensorRepository extends BaseRepository
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
        return FeatureSensor::class;
    }
}
