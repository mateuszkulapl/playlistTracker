<?php

namespace Database\Seeders;

use App\Models\Award;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Tag;
use Database\Factories\PlaylistFactory;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfCategories = rand(3, 10);
        for ($i = 0; $i < $numberOfCategories; $i++) {
            PlaylistFactory::resetOrder();
            Category::factory()
                ->has(Playlist::factory()->count(rand(3, 20)))
                ->has(Award::factory()->count(rand(0, 5)))
                ->has(Tag::factory()->count(rand(0, 5)))
                ->create();
        }
    }
}
