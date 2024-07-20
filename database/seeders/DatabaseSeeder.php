<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        Tag::factory(10)
            ->create();
        BlogCategory::factory(10)
            ->has(Blog::factory(10), 'blog')
            ->create();

        $this->call([
            ProductSeeder::class
        ]);
    }
}
