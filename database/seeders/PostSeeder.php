<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();


        //permet d'acceder au postfactory
        Post::factory(30)
            
            ->sequence(fn () => [
                'category_id' => $categories -> random(),
            ])
            
            ->create();
    }
}
