<?php

namespace App\Repositories;

use App\Models\Frequency;
use App\Repositories\BaseRepository;

/**
 * Class FrequencyRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:22 am UTC
*/

class FrequencyRepository extends BaseRepository
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
        return Frequency::class;
    }
}
