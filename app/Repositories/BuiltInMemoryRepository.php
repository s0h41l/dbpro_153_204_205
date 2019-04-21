<?php

namespace App\Repositories;

use App\Models\BuiltInMemory;
use App\Repositories\BaseRepository;

/**
 * Class BuiltInMemoryRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:25 am UTC
*/

class BuiltInMemoryRepository extends BaseRepository
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
        return BuiltInMemory::class;
    }
}
