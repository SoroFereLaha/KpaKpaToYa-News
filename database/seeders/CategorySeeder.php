<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //liste des categories sur le blog
        //on transforme le tableau en collection, pour avoir acces a pleins de methode
        $categories = collect(['Sport', 'Jeux-video', 'Football', 'Film', 'Religion']);

        $categories->each(fn ($categories) => Category::create([
            'nom' => $categories,
            'slug' => Str::slug($categories),
        ]));
    }
}
