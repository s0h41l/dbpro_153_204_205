<?php

namespace App\Repositories;

use App\Models\MainMemory;
use App\Repositories\BaseRepository;

/**
 * Class MainMemoryRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:19 am UTC
*/

class MainMemoryRepository extends BaseRepository
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
        return MainMemory::class;
    }
}
