<?php

namespace App\Repositories;

use App\Models\Browser;
use App\Repositories\BaseRepository;

/**
 * Class BrowserRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:26 am UTC
*/

class BrowserRepository extends BaseRepository
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
        return Browser::class;
    }
}
