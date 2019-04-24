<?php

namespace App\Repositories;

use App\Models\TwoG;
use App\Repositories\BaseRepository;

/**
 * Class TwoGRepository
 * @package App\Repositories
 * @version April 24, 2019, 6:55 pm UTC
*/

class TwoGRepository extends BaseRepository
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
        return TwoG::class;
    }
}
