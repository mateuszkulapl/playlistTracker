<?php

namespace Tests\Feature;

use App\Models\Award;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AwardTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_can_be_created()
    {
        $category = Award::factory()->create();
        $this->assertModelExists($category);
    }
}
