<?php

namespace App\Repositories;

use App\Models\ScreenSize;
use App\Repositories\BaseRepository;

/**
 * Class ScreenSizeRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:27 am UTC
*/

class ScreenSizeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'size'
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
        return ScreenSize::class;
    }
}
