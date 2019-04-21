<?php

namespace App\Repositories;

use App\Models\BodyColor;
use App\Repositories\BaseRepository;

/**
 * Class BodyColorRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:26 am UTC
*/

class BodyColorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'color'
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
        return BodyColor::class;
    }
}
