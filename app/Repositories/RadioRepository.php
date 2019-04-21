<?php

namespace App\Repositories;

use App\Models\Radio;
use App\Repositories\BaseRepository;

/**
 * Class RadioRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:20 am UTC
*/

class RadioRepository extends BaseRepository
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
        return Radio::class;
    }
}
