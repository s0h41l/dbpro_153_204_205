<?php

namespace App\Repositories;

use App\Models\Sim;
use App\Repositories\BaseRepository;

/**
 * Class SimRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:19 am UTC
*/

class SimRepository extends BaseRepository
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
        return Sim::class;
    }
}
