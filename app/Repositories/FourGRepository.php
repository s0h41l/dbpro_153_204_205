<?php

namespace App\Repositories;

use App\Models\FourG;
use App\Repositories\BaseRepository;

/**
 * Class FourGRepository
 * @package App\Repositories
 * @version April 24, 2019, 6:56 pm UTC
*/

class FourGRepository extends BaseRepository
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
        return FourG::class;
    }
}
