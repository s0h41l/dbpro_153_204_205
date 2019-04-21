<?php

namespace App\Repositories;

use App\Models\ScreenResolution;
use App\Repositories\BaseRepository;

/**
 * Class ScreenResolutionRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:27 am UTC
*/

class ScreenResolutionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'height',
        'width'
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
        return ScreenResolution::class;
    }
}
