<?php

namespace App\Repositories;

use App\Models\UI;
use App\Repositories\BaseRepository;

/**
 * Class UIRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:28 am UTC
*/

class UIRepository extends BaseRepository
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
        return UI::class;
    }
}
