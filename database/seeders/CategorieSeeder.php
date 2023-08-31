<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
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

        foreach ($categories as $categoryName) {
            Categorie::factory()->create([
                'name' => $categoryName,
            ]);
        }
    }
}
