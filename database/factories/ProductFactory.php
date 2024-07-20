<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
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
     * @throws \JsonException
     */
    public function definition(): array
    {
        $gallery = json_encode([
            $this->faker->imageUrl(),
            $this->faker->imageUrl()
        ], JSON_THROW_ON_ERROR);

        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(40, 999),
            'stock_quantity' => $this->faker->numberBetween(0, 20),
//            'category_id' => Category::all()->random(1)->first()->id,
            'brand_id' => Brand::factory(),
            'weight' => $this->faker->numberBetween(5, 100),
            'color' => $this->faker->colorName(),
            'image_url' => $this->faker->imageUrl(),
            'gallery_url' => $gallery,
            'sale_price' => $this->faker->numberBetween(5, 100),
            'sale_start_date' => $this->faker->date(),
            'sale_end_date' => $this->faker->date(),
            'stock_status' => $this->faker->numberBetween(0, 30),
        ];
    }
}
