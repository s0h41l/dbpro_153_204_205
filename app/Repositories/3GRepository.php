<?php

namespace App\Repositories;

use App\Models\3G;
use App\Repositories\BaseRepository;

/**
 * Class 3GRepository
 * @package App\Repositories
 * @version April 24, 2019, 5:44 pm UTC
*/

class 3GRepository extends BaseRepository
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
        return 3G::class;
    }
}
