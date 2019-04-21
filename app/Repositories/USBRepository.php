<?php

namespace App\Repositories;

use App\Models\USB;
use App\Repositories\BaseRepository;

/**
 * Class USBRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:20 am UTC
*/

class USBRepository extends BaseRepository
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
        return USB::class;
    }
}
