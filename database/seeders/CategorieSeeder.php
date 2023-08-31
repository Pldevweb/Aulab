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
        Categorie::factory()->create([
            'name' => 'Accessoires',
        ]);

         Categorie::factory()->create([
            'name' => 'Accessoires de sport',
        ]);

        Categorie::factory()->create([
            'name' => 'Jouets',
        ]);

        Categorie::factory()->create([
            'name' => 'Nourriture',
        ]);

        Categorie::factory()->create([
            'name' => 'Produits de toilettage',
        ]);

        Categorie::factory()->create([
            'name' => 'Vêtements',
        ]);
    }
}
