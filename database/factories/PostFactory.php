<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titre = fake()->unique()->sentence;
        $contenu = fake()->paragraphs(4, true);
        $created_at = fake()->dateTimeBetween('-1 year');

        return [
            'titre' => $titre,
            'slug' => Str::slug($titre),
            'extraitArticle' => Str::limit($contenu, 150),
            'contenu' => $contenu,
            'lienImage' => fake()->imageUrl,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
