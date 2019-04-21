<?php

namespace App\Repositories;

use App\Models\Weight;
use App\Repositories\BaseRepository;

/**
 * Class WeightRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:19 am UTC
*/

class WeightRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'weight'
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
        return Weight::class;
    }
}
