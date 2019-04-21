<?php namespace Tests\Repositories;

use App\Models\ChipSet;
use App\Repositories\ChipSetRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\MakeChipSetTrait;
use Tests\ApiTestTrait;

class ChipSetRepositoryTest extends TestCase
{
    use MakeChipSetTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ChipSetRepository
     */
    protected $chipSetRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->chipSetRepo = \App::make(ChipSetRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_chip_set()
    {
        $chipSet = $this->fakeChipSetData();
        $createdChipSet = $this->chipSetRepo->create($chipSet);
        $createdChipSet = $createdChipSet->toArray();
        $this->assertArrayHasKey('id', $createdChipSet);
        $this->assertNotNull($createdChipSet['id'], 'Created ChipSet must have id specified');
        $this->assertNotNull(ChipSet::find($createdChipSet['id']), 'ChipSet with given id must be in DB');
        $this->assertModelData($chipSet, $createdChipSet);
    }

    /**
     * @test read
     */
    public function test_read_chip_set()
    {
        $chipSet = $this->makeChipSet();
        $dbChipSet = $this->chipSetRepo->find($chipSet->id);
        $dbChipSet = $dbChipSet->toArray();
        $this->assertModelData($chipSet->toArray(), $dbChipSet);
    }

    /**
     * @test update
     */
    public function test_update_chip_set()
    {
        $chipSet = $this->makeChipSet();
        $fakeChipSet = $this->fakeChipSetData();
        $updatedChipSet = $this->chipSetRepo->update($fakeChipSet, $chipSet->id);
        $this->assertModelData($fakeChipSet, $updatedChipSet->toArray());
        $dbChipSet = $this->chipSetRepo->find($chipSet->id);
        $this->assertModelData($fakeChipSet, $dbChipSet->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_chip_set()
    {
        $chipSet = $this->makeChipSet();
        $resp = $this->chipSetRepo->delete($chipSet->id);
        $this->assertTrue($resp);
        $this->assertNull(ChipSet::find($chipSet->id), 'ChipSet should not exist in DB');
    }
}
