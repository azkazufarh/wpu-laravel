<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => "Web Development",
            'slug' => 'web-development'
        ]);
        
        Category::create([
            'name' => "UI/UX Design",
            'slug' => 'ui-ux-design'
        ]);

        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '12345'
        // ]);
    }
}
