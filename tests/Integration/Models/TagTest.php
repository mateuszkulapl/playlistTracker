<?php

namespace Tests\Feature;

use App\Models\Tag;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class TagTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_can_be_created(): void
    {
        $tag = Tag::factory()->create();
        $this->assertModelExists($tag);
    }
    public function test_it_can_have_same_values(): void
    {
        $tag = Tag::factory()->create();
        $duplicate=$tag->replicate();
        $duplicate->save();
        $this->assertModelExists($tag);
        $this->assertModelExists($duplicate);
        $this->assertNotEquals($tag->id,$duplicate->id);
    }
}
