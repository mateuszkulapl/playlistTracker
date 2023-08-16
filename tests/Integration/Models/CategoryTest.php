<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    public function test_it_can_be_created(): void
    {
        $category = Category::factory()->create();
        $this->assertModelExists($category);
    }

    public function test_it_can_not_have_same_name(): void
    {
        $category = Category::factory()->create();
        $this->assertDatabaseCount('categories', 1);
        $this->expectException(QueryException::class);
        $duplicate = Category::factory(['name' => $category->name])->create();
        $this->assertModelMissing($duplicate);
        $this->assertDatabaseCount('categories', 1);
    }

    public function test_it_can_have_playlists(): void
    {
        $category = Category::factory()->hasPlaylists(3)->create();
        $this->assertModelExists($category);
        $this->assertDatabaseCount('playlists', 3);
    }
}
