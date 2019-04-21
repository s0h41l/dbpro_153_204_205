<?php

namespace App\Repositories;

use App\Models\FeatureAudio;
use App\Repositories\BaseRepository;

/**
 * Class FeatureAudioRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:24 am UTC
*/

class FeatureAudioRepository extends BaseRepository
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
        return FeatureAudio::class;
    }
}
