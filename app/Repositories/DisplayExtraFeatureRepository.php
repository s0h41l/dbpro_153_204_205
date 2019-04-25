<?php

namespace App\Repositories;

use App\Models\DisplayExtraFeature;
use App\Repositories\BaseRepository;

/**
 * Class DisplayExtraFeatureRepository
 * @package App\Repositories
 * @version April 25, 2019, 3:09 pm UTC
*/

class DisplayExtraFeatureRepository extends BaseRepository
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
        return DisplayExtraFeature::class;
    }
}
