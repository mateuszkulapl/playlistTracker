<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /*
     [
    {#6481
      +"Field": "id",
      +"Type": "bigint(20) unsigned",
      +"Null": "NO",
      +"Key": "PRI",
      +"Default": null,
      +"Extra": "auto_increment",
    },
    {#6483
      +"Field": "name",
      +"Type": "varchar(255)",
      +"Null": "NO",
      +"Key": "UNI",
      +"Default": null,
      +"Extra": "",
    },
    {#6484
      +"Field": "created_at",
      +"Type": "timestamp",
      +"Null": "YES",
      +"Key": "",
      +"Default": null,
      +"Extra": "",
    },
    {#6485
      +"Field": "updated_at",
      +"Type": "timestamp",
      +"Null": "YES",
      +"Key": "",
      +"Default": null,
      +"Extra": "",
    },
    {#6486
      +"Field": "deleted_at",
      +"Type": "timestamp",
      +"Null": "YES",
      +"Key": "",
      +"Default": null,
      +"Extra": "",
    },
    {#6487
      +"Field": "category_id",
      +"Type": "bigint(20) unsigned",
      +"Null": "YES",
      +"Key": "",
      +"Default": null,
      +"Extra": "",
    },
  ]
  */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => Category::factory(),
        ];
    }
}
