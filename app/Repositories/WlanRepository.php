<?php

namespace App\Repositories;

use App\Models\Wlan;
use App\Repositories\BaseRepository;

/**
 * Class WlanRepository
 * @package App\Repositories
 * @version April 21, 2019, 9:09 am UTC
*/

class WlanRepository extends BaseRepository
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
        return Wlan::class;
    }
}
