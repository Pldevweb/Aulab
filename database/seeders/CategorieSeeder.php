<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            'Accessoires',
            'Accessoires de sport',
            'Jouets',
            'Nourriture',
            'Produits de toilettage',
            'Vêtements',
        ];

        $categoriesSlug = [
            'accessories',
            'sport-accessories',
            'toys',
            'food',
            'grooming-products',
            'clothes',
        ];

        foreach ($categories as $categoryName) {
            Categorie::firstOrCreate([
                'name' => $categoryName,
                'slug' => $categoriesSlug[array_search($categoryName, $categories)],
            ]);
        }
    }
}
