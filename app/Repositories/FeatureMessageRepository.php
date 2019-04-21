<?php

namespace App\Repositories;

use App\Models\FeatureMessage;
use App\Repositories\BaseRepository;

/**
 * Class FeatureMessageRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:27 am UTC
*/

class FeatureMessageRepository extends BaseRepository
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
        return FeatureMessage::class;
    }
}
