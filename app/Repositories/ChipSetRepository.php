<?php

namespace App\Repositories;

use App\Models\ChipSet;
use App\Repositories\BaseRepository;

/**
 * Class ChipSetRepository
 * @package App\Repositories
 * @version April 21, 2019, 10:13 am UTC
*/

class ChipSetRepository extends BaseRepository
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
        return ChipSet::class;
    }
}
