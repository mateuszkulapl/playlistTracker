<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ViewTest extends TestCase
{
    use DatabaseTransactions;

    public function test_add_category_button_is_visible(): void
    {
        $response = $this->get('/');
        $response->assertSeeText('Dodaj kategorię');
    }

    public function test_add_tag_input_is_visible(): void
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertSee('Nazwa tagu');
    }

    public function test_import_block_title_is_visible(): void
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertSeeText('Importuj do kategorii ');
    }

    public function test_deleted_block_title_is_visible(): void
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertSeeText('Usunięte elementy');
    }

    public function test_edit_awards_title_is_visible(): void
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertSeeText('Edytuj nagrody');
    }
}
