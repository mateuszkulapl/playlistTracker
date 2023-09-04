<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Playlist;
use App\Models\Tag;
use Database\Factories\PlaylistFactory;
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
    /**
     * Test if playlist can be moved, moved playlist should have new order, and other playlists should have order updated
     */
    public function test_playlist_can_be_moved(): void
    {
        PlaylistFactory::resetOrder();
        $cat = Category::factory()->has(Playlist::factory()->count(10))->create();
        $beforeMoveOrder = $cat->playlists()->orderBy('order')->pluck('id');
        $cat->playlists()->orderBy('order')->first()->moveBy(2);
        $expectedOrder = $beforeMoveOrder->slice(1, 2)->concat($beforeMoveOrder->slice(0, 1))->concat($beforeMoveOrder->slice(3))->values();
        $newOrder = $cat->playlists()->orderBy('order')->pluck('id');
        $this->assertEquals($expectedOrder->toArray(), $newOrder->toArray());
        $this->assertNotEquals($beforeMoveOrder->toArray(), $newOrder->toArray());
    }

    /**
     * Test last playlist can't be moved down, moveBy returns false
     */
    public function test_last_playlist_cant_be_moved_down(): void
    {
        PlaylistFactory::resetOrder();
        $cat = Category::factory()->has(Playlist::factory()->count(5))->create();
        $lastPlaylist = $cat->playlists()->orderBy('order', 'desc')->first();
        $oderBeforeMove = $lastPlaylist->order;
        $idsBeforeMove = $cat->playlists()->orderBy('order')->pluck('id');
        $movResult = $lastPlaylist->moveBy(1);
        $this->assertFalse($movResult);
        $this->assertEquals($oderBeforeMove, $lastPlaylist->order); //no move
        $orders = $cat->playlists()->orderBy('order')->pluck('order');
        $this->assertEquals([1, 2, 3, 4, 5], $orders->toArray());
        $idsAfterMove = $cat->playlists()->orderBy('order')->pluck('id');
        $this->assertEquals($idsBeforeMove->toArray(), $idsAfterMove->toArray());
    }

    /**
     * Test if restores playlist is moved to last position
     */
    public function test_restored_playlist_is_last(): void
    {
        $numOfPlaylists = 5;
        PlaylistFactory::resetOrder();
        $cat = Category::factory()->has(Playlist::factory()->count($numOfPlaylists))->create();
        $firstPlaylist = $cat->playlists()->orderBy('order')->first();
        $firstPlaylist->delete();
        $firstPlaylist->restore();
        $this->assertEquals($numOfPlaylists, $firstPlaylist->order);
    }

    /**
     * Test if order of remaining playlists is updated after deletion of playlist, order should be in range from 1 to number of playlists
     */
    public function test_order_is_updated_on_delete(): void
    {
        $numOfPlaylists = 5;
        PlaylistFactory::resetOrder();
        $cat = Category::factory()->has(Playlist::factory()->count($numOfPlaylists))->create();
        $firstPlaylist = $cat->playlists()->orderBy('order')->first();
        $firstPlaylist->delete();
        $this->assertEquals($cat->playlists()->orderBy('order')->pluck('order')->toArray(), range(1, $numOfPlaylists - 1));
    }
}
