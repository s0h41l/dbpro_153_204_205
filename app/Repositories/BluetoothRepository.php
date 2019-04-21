<?php

namespace App\Repositories;

use App\Models\Bluetooth;
use App\Repositories\BaseRepository;

/**
 * Class BluetoothRepository
 * @package App\Repositories
 * @version April 21, 2019, 9:24 am UTC
*/

class BluetoothRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'details',
        'version'
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
        return Bluetooth::class;
    }
}
