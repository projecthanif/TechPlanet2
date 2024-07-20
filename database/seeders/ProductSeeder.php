<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//        Brand::factory(10)
//            ->create();
//        Category::factory(10)
//            ->has(Product::factory(10), 'product')
//            ->create();

        Category::factory(10)
            ->create()
            ->each(function ($category) {
                $category->product()->saveMany(
                    Product::factory(10)
                        ->make()
                        ->each(function ($product) {
                            $product->brand()->associate(Brand::factory()->create());
                        })
                );
            });
    }
}
