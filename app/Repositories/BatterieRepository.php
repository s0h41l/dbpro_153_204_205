<?php

namespace App\Repositories;

use App\Models\Batterie;
use App\Repositories\BaseRepository;

/**
 * Class BatterieRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:25 am UTC
*/

class BatterieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'details',
        'capacity'
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
        return Batterie::class;
    }
}
