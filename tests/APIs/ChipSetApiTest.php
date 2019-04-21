<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\MakeChipSetTrait;
use Tests\ApiTestTrait;

class ChipSetApiTest extends TestCase
{
    use MakeChipSetTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_chip_set()
    {
        $chipSet = $this->fakeChipSetData();
        $this->response = $this->json('POST', '/api/chipSets', $chipSet);

        $this->assertApiResponse($chipSet);
    }

    /**
     * @test
     */
    public function test_read_chip_set()
    {
        $chipSet = $this->makeChipSet();
        $this->response = $this->json('GET', '/api/chipSets/'.$chipSet->id);

        $this->assertApiResponse($chipSet->toArray());
    }

    /**
     * @test
     */
    public function test_update_chip_set()
    {
        $chipSet = $this->makeChipSet();
        $editedChipSet = $this->fakeChipSetData();

        $this->response = $this->json('PUT', '/api/chipSets/'.$chipSet->id, $editedChipSet);

        $this->assertApiResponse($editedChipSet);
    }

    /**
     * @test
     */
    public function test_delete_chip_set()
    {
        $chipSet = $this->makeChipSet();
        $this->response = $this->json('DELETE', '/api/chipSets/'.$chipSet->id);

        $this->assertApiSuccess();
        $this->response = $this->json('GET', '/api/chipSets/'.$chipSet->id);

        $this->response->assertStatus(404);
    }
}
