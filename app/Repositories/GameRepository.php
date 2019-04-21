<?php

namespace App\Repositories;

use App\Models\Game;
use App\Repositories\BaseRepository;

/**
 * Class GameRepository
 * @package App\Repositories
 * @version April 21, 2019, 8:26 am UTC
*/

class GameRepository extends BaseRepository
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
        return Game::class;
    }
}
