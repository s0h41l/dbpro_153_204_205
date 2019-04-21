<?php

namespace App\Repositories;

use App\Models\CPU;
use App\Repositories\BaseRepository;

/**
 * Class CPURepository
 * @package App\Repositories
 * @version April 21, 2019, 8:24 am UTC
*/

class CPURepository extends BaseRepository
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
        return CPU::class;
    }
}
