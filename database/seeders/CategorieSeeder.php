<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

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

        foreach ($categories as $categoryName) {
            Categorie::factory()->create([
                'name' => $categoryName,
            ]);
        }
    }
}
