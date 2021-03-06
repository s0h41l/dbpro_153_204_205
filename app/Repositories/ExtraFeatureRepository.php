<?php

namespace App\Repositories;

use App\Models\ExtraFeature;
use App\Repositories\BaseRepository;

/**
 * Class ExtraFeatureRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:19 am UTC
*/

class ExtraFeatureRepository extends BaseRepository
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
        return ExtraFeature::class;
    }
}
