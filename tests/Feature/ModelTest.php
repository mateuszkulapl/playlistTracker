<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Tag;
use Illuminate\Database\QueryException;

class ModelTest extends TestCase
{
    use RefreshDatabase;
    public function test_tags_can_be_created(): void
    {
        $this->seed();
        $tag = Tag::factory()->create();
        $this->assertModelExists($tag);
    }
    public function test_categories_can_be_created(): void
    {
        $this->seed();
        $category = Category::factory()->create();
        $this->assertModelExists($category);
    }
    public function test_categories_cant_have_same_name(): void
    {
        $category = Category::factory()->create();
        $this->assertDatabaseCount('categories', 1);
        $this->expectException(QueryException::class);
        $duplicate = Category::factory(['name' => $category->name])->create();
        $this->assertModelMissing($duplicate);
        $this->assertDatabaseCount('categories', 1);
    }

    public function test_playlists_cant_have_same_id(): void
    {
        $playlist = Playlist::factory()->create();
        $this->assertDatabaseCount('playlists', 1);
        $this->expectException(QueryException::class);
        $duplicate = Playlist::factory(['id' => $playlist->id])->create();
        $this->assertModelMissing($duplicate);
        $this->assertDatabaseCount('playlists', 1);
    }
    public function test_playlists_must_have_only_different_id(): void
    {
        $playlist = Playlist::factory()->create();
        $this->assertDatabaseCount('playlists', 1);
        $duplicate = $playlist->replicate();
        $duplicate->id .= "2";
        $duplicate->save();
        $this->assertDatabaseCount('playlists', 2);
        $this->assertModelExists($duplicate);
    }
}
