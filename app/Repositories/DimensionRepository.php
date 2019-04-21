<?php

namespace App\Repositories;

use App\Models\Dimension;
use App\Repositories\BaseRepository;

/**
 * Class DimensionRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:20 am UTC
*/

class DimensionRepository extends BaseRepository
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
        return Dimension::class;
    }
}
