<?php

namespace Tests\Feature;

use App\Livewire\DeletedPlaylists;
use App\Livewire\EditAward;
use App\Livewire\ImportForm;
use App\Livewire\IndexPlaylists;
use App\Livewire\ManageCategories;
use App\Livewire\ShowAwards;
use App\Livewire\ShowChannels;
use App\Livewire\ShowElement;
use App\Livewire\ShowTags;
use App\Livewire\TagForm;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Tag;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireComponentsTest extends TestCase
{
    use DatabaseTransactions;

    private function category(int $playlists = 3): Category
    {
        return Category::factory()->has(Playlist::factory()->count($playlists))->create();
    }

    public function test_home_page_renders_with_data(): void
    {
        $category = $this->category();
        $this->get(route('playlist.index'))->assertOk()->assertSee('Importuj do kategorii');
    }

    public function test_index_loads_playlists_and_switches_category(): void
    {
        $a = $this->category(2);
        $b = $this->category(4);
        Livewire::test(IndexPlaylists::class)
            ->call('loadPlaylists')
            ->assertSet('loaded', true)
            ->call('filterByCategory', $a->id)
            ->assertDispatched('categorySelected', categoryId: $a->id)
            ->assertSet('category.id', $a->id)
            ->assertCount('playlists', 2);
    }

    public function test_show_element_actions(): void
    {
        $category = $this->category(3);
        $playlist = $category->playlists()->orderBy('order')->first();
        $tag = Tag::factory()->create(['category_id' => $category->id]);

        Livewire::test(ShowElement::class, ['playlist' => $playlist, 'allTags' => collect([$tag]), 'allCategories' => collect([$category]), 'playlistsCount' => 3])
            ->call('watch')->assertDispatched('watched')
            ->call('unwatch')->assertDispatched('unwatched')
            ->call('setProgress')->assertDispatched('progressed')
            ->call('rate', 4)
            ->call('attachTag', $tag->id)
            ->call('detachTag', $tag->id)
            ->call('moveDown')->assertDispatched('moved')
            ->call('delete')->assertDispatched('deleted')->assertDispatched('toast', msg: 'Usunięto: "' . $playlist->title . '"');

        $this->assertSoftDeleted('playlists', ['id' => $playlist->id]);
    }

    public function test_manage_categories_crud(): void
    {
        $existing = $this->category(0);
        $component = Livewire::test(ManageCategories::class)
            ->call('toggle')
            ->call('openAddForm')
            ->set('newCategoryName', 'Nowa kategoria XYZ')
            ->call('addCategory')
            ->assertHasNoErrors()
            ->assertDispatched('categoryAdded');

        $new = Category::where('name', 'Nowa kategoria XYZ')->firstOrFail();

        $component->call('startEdit', $new->id)
            ->set('editingCategoryName', 'Zmieniona XYZ')
            ->call('updateCategory')
            ->assertDispatched('categoryRenamed');
        $this->assertSame('Zmieniona XYZ', $new->fresh()->name);

        $component->call('confirmDelete', $new->id)
            ->call('deleteCategory', $new->id)
            ->assertDispatched('categoryDeleted');
        $this->assertSoftDeleted('categories', ['id' => $new->id]);
    }

    public function test_tag_form_and_show_tags(): void
    {
        $category = $this->category(1);
        Livewire::test(TagForm::class, ['category' => $category])
            ->set('name', 'tag-testowy')
            ->call('save')
            ->assertHasNoErrors()
            ->assertDispatched('tagCreated');
        $tag = Tag::where('name', 'tag-testowy')->firstOrFail();

        Livewire::test(ShowTags::class, ['category' => $category, 'tags' => $category->tags()->get()])
            ->call('toggleSelect', $tag->id)
            ->assertDispatched('tagsSelected')
            ->call('delete', $tag->id)
            ->assertDispatched('tagDeleted');
    }

    public function test_awards(): void
    {
        $category = $this->category(1);
        Livewire::test(EditAward::class, ['category' => $category, 'award' => null])
            ->set('name', 'Nagroda')
            ->set('percentage', '50')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertDispatched('awardsupdated');
        $this->assertSame(1, $category->awards()->count());

        Livewire::test(ShowAwards::class, ['category' => $category])->assertSee('Edytuj nagrody');
    }

    public function test_channels_and_deleted_playlists(): void
    {
        $category = $this->category(2);
        $category->playlists()->update(['channelTitle' => 'Kanal A', 'channelId' => 'UC1']);
        Livewire::test(ShowChannels::class, ['category' => $category])
            ->assertSee('Kanal A')
            ->call('toggleSelect', 'Kanal A')
            ->assertDispatched('channelsSelected');

        $playlist = $category->playlists()->first();
        $playlist->delete();
        Livewire::test(DeletedPlaylists::class, ['category' => $category])
            ->call('open')
            ->assertSee($playlist->title)
            ->call('restorePlaylist', $playlist->id)
            ->assertDispatched('undeleted');
        $this->assertNull($playlist->fresh()->deleted_at);
    }

    public function test_import_form_import_and_add(): void
    {
        $category = $this->category(1);
        Http::fake([
            '*videos*' => Http::response(['items' => [[
                'id' => 'vid12345678',
                'snippet' => [
                    'title' => 'Testowy film',
                    'description' => 'opis',
                    'thumbnails' => ['medium' => ['url' => 'http://x/y.jpg']],
                    'publishedAt' => '2024-01-02T03:04:05Z',
                    'channelId' => 'UCx',
                    'channelTitle' => 'Kanal',
                ],
                'contentDetails' => ['duration' => 'PT1H2M3S'],
            ]]]),
        ]);

        Livewire::test(ImportForm::class, ['category' => $category])
            ->set('links', 'https://www.youtube.com/watch?v=vid12345678')
            ->call('import')
            ->assertSee('Testowy film')
            ->assertSee('1:02:03')
            ->call('add', 'vid12345678')
            ->assertDispatched('playlistCreated', 'vid12345678');

        $added = Playlist::find('vid12345678');
        $this->assertNotNull($added);
        $this->assertSame($category->id, $added->category_id);
        $this->assertEquals(3723, $added->duration->totalSeconds);
    }
}
