<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Repositories\BaseRepository;

/**
 * Class BrandRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:25 am UTC
*/

class BrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Brand::class;
    }
}
