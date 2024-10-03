<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'product_category_id' => ProductCategory::factory(),
            'title' => fake()->word(),
            'price' => fake()->randomElement([34, 54, 12, 78, 234, 56, 90, 43]),
            'description' => fake()->paragraph()
        ];
    }

    public function configure(): ProductFactory|Factory
    {
      return $this->has(Image::factory()->count(3), 'images');
    }
}
