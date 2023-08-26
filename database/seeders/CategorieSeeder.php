<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Categorie::factory()->create([
            'name' => 'Accessoires',
        ]);

         \App\Models\Categorie::factory()->create([
            'name' => 'Accessoires de sport',
        ]);

         \App\Models\Categorie::factory()->create([
            'name' => 'Jouets',
        ]);

        \App\Models\Categorie::factory()->create([
            'name' => 'Nourriture',
        ]);

        \App\Models\Categorie::factory()->create([
            'name' => 'Produits de toilettage',
        ]);

        \App\Models\Categorie::factory()->create([
            'name' => 'Vêtements',
        ]);
    }
}
