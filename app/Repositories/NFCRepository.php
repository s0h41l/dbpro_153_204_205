<?php

namespace App\Repositories;

use App\Models\NFC;
use App\Repositories\BaseRepository;

/**
 * Class NFCRepository
 * @package App\Repositories
 * @version April 21, 2019, 7:26 am UTC
*/

class NFCRepository extends BaseRepository
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
        return NFC::class;
    }
}
