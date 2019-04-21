<?php

namespace App\Repositories;

use App\Models\SecondaryCamera;
use App\Repositories\BaseRepository;

/**
 * Class SecondaryCameraRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:22 am UTC
*/

class SecondaryCameraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'details',
        'mega_pixels'
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
        return SecondaryCamera::class;
    }
}
