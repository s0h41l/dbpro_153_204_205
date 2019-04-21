<?php

namespace App\Repositories;

use App\Models\Battery;
use App\Repositories\BaseRepository;

/**
 * Class BatteryRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:00 am UTC
*/

class BatteryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Details',
        'Capacity'
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
        return Battery::class;
    }
}
