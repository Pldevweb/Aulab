<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $accessoiresCategories = Categorie::where('name', 'Accessoires')->get();
        $accessoiresSportCategories = Categorie::where('name', 'Accessoires de sport')->get();
        $jouetsCategories = Categorie::where('name', 'Jouets')->get();
        $nourritureCategories = Categorie::where('name', 'Nourriture')->get();
        $toilettageCategories = Categorie::where('name', 'Produits de toilettage')->get();
        $vetementsCategories = Categorie::where('name', 'Vêtements')->get();

        // Acessoires

        $product1 = Product::factory()->create([
            'name' => 'Harnais réfléchissant pour promenade nocturne',
            'price' => 5.99,
            'description' => 'Assurez la sécurité de votre ami à quatre pattes lors des promenades nocturnes avec ce harnais réfléchissant.',
            'discount' => 10,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresCategories[0]->products()->attach($product1);

        $product2 = Product::factory()->create([
            'name' => 'Gamelle antidérapante pour chien',
            'price' => 3.99,
            'description' => 'Offrez à votre chien une gamelle antidérapante pour des repas confortables.',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresCategories[0]->products()->attach($product2);

        $product3 = Product::factory()->create([
            'name' => 'Laisse extensible pour plus de liberté',
            'price' => 8.99,
            'description' => 'Laisse extensible pour plus de liberté',
            'discount' => 15,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresCategories[0]->products()->attach($product3);

        $product4 = Product::factory()->create([
            'name' => 'Sac de transport confortable pour petit chien',
            'price' => 14.99,
            'description' => 'Sac de transport confortable pour petit chien',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresCategories[0]->products()->attach($product4);

        // Accessoires de sport

        $product5 = Product::factory()->create([
            'name' => 'Gourde avec compartiment pour friandises',
            'price' => 6.99,
            'description' => 'Gourde avec compartiment pour friandises',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresSportCategories[0]->products()->attach($product5);

        $product6 = Product::factory()->create([
            'name' => 'Sac à dos de randonnée pour chien',
            'description' => 'Sac à dos de randonnée pour chien',
            'price' => 7.99,
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresSportCategories[0]->products()->attach($product6);

        $product7 = Product::factory()->create([
            'name' => 'Balle de jeu flottante',
            'description' => 'Balle de jeu flottant',
            'price' => 2.99,
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresSportCategories[0]->products()->attach($product7);

        $product8 = Product::factory()->create([
            'name' => 'Bandeau de sport pour chien',
            'description' => 'Bandeau de sport pour chien',
            'price' => 1.99,
            'discount' => 10,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $accessoiresSportCategories[0]->products()->attach($product8);

        // Jouets

        $product9 = Product::factory()->create([
            'name' => 'Jouet à mâcher en corde',
            'price' => 4.99,
            'description' => 'Jouet à mâcher en corde',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $jouetsCategories[0]->products()->attach($product9);

        $product10 = Product::factory()->create([
            'name' => 'Jouet à lancer et rapporter',
            'price' => 3.99,
            'description' => 'Jouet à lancer et rapporter',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $jouetsCategories[0]->products()->attach($product10);

        $product11 = Product::factory()->create([
            'name' => 'Puzzle de nourriture pour stimuler l\'intelligence',
            'price' => 7.99,
            'description' => 'Puzzle de nourriture pour stimuler l\'intelligence',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $jouetsCategories[0]->products()->attach($product11);

        $product12 = Product::factory()->create([
            'name' => 'Peluche douce pour réconforter',
            'price' => 2.99,
            'description' => 'Peluche douce pour réconforter',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $jouetsCategories[0]->products()->attach($product12);

        // Nourriture

        $product13 = Product::factory()->create([
            'name' => 'Croquettes haut de gamme au poulet',
            'price' => 8.99,
            'description' => 'Croquettes haut de gamme au poulet',
            'discount' => 50,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $nourritureCategories[0]->products()->attach($product13);

        $product14 = Product::factory()->create([
            'name' => 'Friandises naturelles au saumon',
            'price' => 4.99,
            'description' => 'Friandises naturelles au saumon',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $nourritureCategories[0]->products()->attach($product14);

        $product15 = Product::factory()->create([
            'name' => 'Aliments en boîte équilibrés',
            'price' => 4.99,
            'description' => 'Aliments en boîte équilibrés',
            'discount' => 30,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $nourritureCategories[0]->products()->attach($product15);

        $product16 = Product::factory()->create([
            'name' => 'Barres énergétiques pour chien actif',
            'price' => 4.99,
            'description' => 'Barres énergétiques pour chien actif',
            'discount' => 5,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $nourritureCategories[0]->products()->attach($product16);

        // Produits de toilettage

        $product17 = Product::factory()->create([
            'name' => 'Shampooing hypoallergénique pour peau sensible',
            'price' => 4.99,
            'description' => 'Shampooing hypoallergénique pour peau sensible',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $toilettageCategories[0]->products()->attach($product17);

        $product18 = Product::factory()->create([
            'name' => 'Brosse de toilettage démêlante',
            'price' => 4.99,
            'description' => 'Brosse de toilettage démêlante',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $toilettageCategories[0]->products()->attach($product18);

        $product19 = Product::factory()->create([
            'name' => 'Ciseaux de toilettage professionnels',
            'price' => 11.99,
            'description' => 'Ciseaux de toilettage professionnels',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $toilettageCategories[0]->products()->attach($product19);

        $product20 = Product::factory()->create([
            'name' => 'Parfum sans alcool pour chien',
            'price' => 44.99,
            'description' => 'Parfum sans alcool pour chien',
            'discount' => 20,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $toilettageCategories[0]->products()->attach($product20);

        // Vêtements

        $product21 = Product::factory()->create([
            'name' => 'Manteau imperméable pour les jours de pluie',
            'price' => 4.99,
            'description' => 'Manteau imperméable pour les jours de pluie',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $vetementsCategories[0]->products()->attach($product21);

        $product22 = Product::factory()->create([
            'name' => 'Pull en laine pour garder au chaud',
            'price' => 8.99,
            'description' => 'Pull en laine pour garder au chaud',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $vetementsCategories[0]->products()->attach($product22);

        $product23 = Product::factory()->create([
            'name' => 'Chapeau avec protection solaire',
            'price' => 7.99,
            'description' => 'Chapeau avec protection solaire',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $vetementsCategories[0]->products()->attach($product23);

        $product24 = Product::factory()->create([
            'name' => 'Costume élégant pour occasions spéciales',
            'price' => 4.99,
            'description' => 'Costume élégant pour occasions spéciales',
            'discount' => 0,
            'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
        ]);

        $vetementsCategories[0]->products()->attach($product24);
    }
}
