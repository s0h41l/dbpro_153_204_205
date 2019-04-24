<?php

namespace App\Repositories;

use App\Models\4G;
use App\Repositories\BaseRepository;

/**
 * Class 4GRepository
 * @package App\Repositories
 * @version April 24, 2019, 5:45 pm UTC
*/

class 4GRepository extends BaseRepository
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
        return 4G::class;
    }
}
