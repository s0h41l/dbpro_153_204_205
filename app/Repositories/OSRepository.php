<?php

namespace App\Repositories;

use App\Models\OS;
use App\Repositories\BaseRepository;

/**
 * Class OSRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:27 am UTC
*/

class OSRepository extends BaseRepository
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
        return OS::class;
    }
}
