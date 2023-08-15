<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_category_button_is_visible(): void
    {
        $response = $this->get('/');
        $response->assertSee('Dodaj kategorię');
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
        $response->assertSee('Importuj do kategorii ');
    }
}
