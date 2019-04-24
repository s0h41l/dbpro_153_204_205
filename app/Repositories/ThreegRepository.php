<?php

namespace App\Repositories;

use App\Models\Threeg;
use App\Repositories\BaseRepository;

/**
 * Class ThreegRepository
 * @package App\Repositories
 * @version April 24, 2019, 6:55 pm UTC
*/

class ThreegRepository extends BaseRepository
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
        return Threeg::class;
    }
}
