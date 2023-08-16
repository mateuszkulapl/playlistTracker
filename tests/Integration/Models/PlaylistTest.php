<?php

namespace Tests\Feature;

use App\Models\Playlist;
use App\Models\Tag;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlaylistTest extends TestCase
{
    use RefreshDatabase;
    private static string $table = 'playlists';

    protected $playlist;

    protected function setUp(): void
    {
        parent::setUp();
        $this->playlist = Playlist::factory()->create();
    }

    public function test_it_cant_have_same_id(): void
    {
        $this->assertDatabaseCount($this::$table, 1);
        $this->expectException(QueryException::class);
        $duplicate = Playlist::factory(['id' => $this->playlist->id])->create();
        $this->assertModelMissing($duplicate);
        $this->assertDatabaseCount($this::$table, 1);
    }

    public function test_it_must_have_only_different_id(): void
    {
        $this->assertDatabaseCount($this::$table, 1);
        $duplicate = $this->playlist->replicate();
        $duplicate->id .= "2";
        $duplicate->save();
        $this->assertDatabaseCount($this::$table, 2);
        $this->assertModelExists($duplicate);
    }

    public function test_it_belongs_to_category(): void
    {
        $this->assertDatabaseCount($this::$table, 1);
        $this->assertNotNull($this->playlist->category);
    }

    public function test_it_cannot_be_saved_without_category(): void
    {
        $this->assertDatabaseCount($this::$table, 1);
        $playlistWithoutCat = Playlist::factory()->make();
        $playlistWithoutCat->category = null;
        $this->expectException(QueryException::class);
        $playlistWithoutCat->save();
        $this->assertDatabaseCount($this::$table, 1);
    }

    public function test_it_can_be_softdeleted(): void
    {
        $this->assertEquals(1, Playlist::all()->count());
        $this->playlist->delete();
        $this->assertSoftDeleted($this::$table, [
            'id' => $this->playlist->id
        ]);
        $this->assertEquals(0, Playlist::all()->count());
    }

    public function test_it_can_be_restored(): void
    {
        $this->playlist->delete();
        $this->assertEquals(0, Playlist::all()->count());
        $this->playlist->restore();
        $this->assertNotSoftDeleted($this::$table, [
            'id' => $this->playlist->id
        ]);
        $this->assertEquals(1, Playlist::all()->count());
    }

    public function test_it_can_have_tags(): void
    {
        $this->assertDatabaseCount('tags', 0);
        $this->playlist->tags()->saveMany(Tag::factory()->count(3)->make());
        $this->assertDatabaseCount('tags', 3);
    }
}
