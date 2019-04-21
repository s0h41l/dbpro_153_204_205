<?php

namespace App\Repositories;

use App\Models\DisplayProtection;
use App\Repositories\BaseRepository;

/**
 * Class DisplayProtectionRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:27 am UTC
*/

class DisplayProtectionRepository extends BaseRepository
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
        return DisplayProtection::class;
    }
}
