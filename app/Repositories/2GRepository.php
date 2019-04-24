<?php

namespace App\Repositories;

use App\Models\2G;
use App\Repositories\BaseRepository;

/**
 * Class 2GRepository
 * @package App\Repositories
 * @version April 24, 2019, 5:46 pm UTC
*/

class 2GRepository extends BaseRepository
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
        return 2G::class;
    }
}
