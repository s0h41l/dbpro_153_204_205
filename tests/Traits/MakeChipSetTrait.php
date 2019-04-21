<?php namespace Tests\Traits;

use Faker\Factory as Faker;
use App\Models\ChipSet;
use App\Repositories\ChipSetRepository;

trait MakeChipSetTrait
{
    /**
     * Create fake instance of ChipSet and save it in database
     *
     * @param array $chipSetFields
     * @return ChipSet
     */
    public function makeChipSet($chipSetFields = [])
    {
        /** @var ChipSetRepository $chipSetRepo */
        $chipSetRepo = \App::make(ChipSetRepository::class);
        $theme = $this->fakeChipSetData($chipSetFields);
        return $chipSetRepo->create($theme);
    }

    /**
     * Get fake instance of ChipSet
     *
     * @param array $chipSetFields
     * @return ChipSet
     */
    public function fakeChipSet($chipSetFields = [])
    {
        return new ChipSet($this->fakeChipSetData($chipSetFields));
    }

    /**
     * Get fake data of ChipSet
     *
     * @param array $chipSetFields
     * @return array
     */
    public function fakeChipSetData($chipSetFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $chipSetFields);
    }
}
