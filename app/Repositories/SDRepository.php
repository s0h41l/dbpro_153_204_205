<?php

namespace App\Repositories;

use App\Models\SD;
use App\Repositories\BaseRepository;

/**
 * Class SDRepository
 * @package App\Repositories
 * @version April 25, 2019, 5:32 pm UTC
*/

class SDRepository extends BaseRepository
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
        return SD::class;
    }
}
