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

        $categoriesData = [

            'Accessoires' => [

                [
                    'name' => 'Harnais réfléchissant pour promenade nocturne',
                    'price' => 5.99,
                    'description' => 'Assurez la sécurité de votre ami à quatre pattes lors des promenades nocturnes avec ce harnais réfléchissant.',
                    'discount' => 10,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Gamelle antidérapante pour chien',
                    'price' => 3.99,
                    'description' => 'Offrez à votre chien une gamelle antidérapante pour des repas confortables.',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Laisse extensible pour plus de liberté',
                    'price' => 8.99,
                    'description' => 'Laisse extensible pour plus de liberté',
                    'discount' => 15,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Sac de transport confortable pour petit chien',
                    'price' => 14.99,
                    'description' => 'Sac de transport confortable pour petit chien',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

            ],

            'Accessoires de sport' => [

                [
                    'name' => 'Gourde avec compartiment pour friandises',
                    'price' => 6.99,
                    'description' => 'Gourde avec compartiment pour friandises',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Sac à dos de randonnée pour chien',
                    'description' => 'Sac à dos de randonnée pour chien',
                    'price' => 7.99,
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Balle de jeu flottante',
                    'description' => 'Balle de jeu flottant',
                    'price' => 2.99,
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Bandeau de sport pour chien',
                    'description' => 'Bandeau de sport pour chien',
                    'price' => 1.99,
                    'discount' => 10,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

            ],

            'Jouets' => [

                [
                    'name' => 'Jouet à mâcher en corde',
                    'price' => 4.99,
                    'description' => 'Jouet à mâcher en corde',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Jouet à lancer et rapporter',
                    'price' => 3.99,
                    'description' => 'Jouet à lancer et rapporter',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Puzzle de nourriture pour stimuler l\'intelligence',
                    'price' => 7.99,
                    'description' => 'Puzzle de nourriture pour stimuler l\'intelligence',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Peluche douce pour réconforter',
                    'price' => 2.99,
                    'description' => 'Peluche douce pour réconforter',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

            ],

            'Nourriture' => [

                [
                    'name' => 'Croquettes haut de gamme au poulet',
                    'price' => 8.99,
                    'description' => 'Croquettes haut de gamme au poulet',
                    'discount' => 50,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Friandises naturelles au saumon',
                    'price' => 4.99,
                    'description' => 'Friandises naturelles au saumon',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Aliments en boîte équilibrés',
                    'price' => 4.99,
                    'description' => 'Aliments en boîte équilibrés',
                    'discount' => 30,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Barres énergétiques pour chien actif',
                    'price' => 4.99,
                    'description' => 'Barres énergétiques pour chien actif',
                    'discount' => 5,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

            ],

            'Produits de toilettage' => [

                [
                    'name' => 'Shampooing hypoallergénique pour peau sensible',
                    'price' => 4.99,
                    'description' => 'Shampooing hypoallergénique pour peau sensible',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Brosse de toilettage démêlante',
                    'price' => 4.99,
                    'description' => 'Brosse de toilettage démêlante',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Ciseaux de toilettage professionnels',
                    'price' => 11.99,
                    'description' => 'Ciseaux de toilettage professionnels',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Parfum sans alcool pour chien',
                    'price' => 44.99,
                    'description' => 'Parfum sans alcool pour chien',
                    'discount' => 20,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],
            ],

            'Vêtements' => [

                [
                    'name' => 'Manteau imperméable pour les jours de pluie',
                    'price' => 4.99,
                    'description' => 'Manteau imperméable pour les jours de pluie',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Pull en laine pour garder au chaud',
                    'price' => 8.99,
                    'description' => 'Pull en laine pour garder au chaud',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Chapeau avec protection solaire',
                    'price' => 7.99,
                    'description' => 'Chapeau avec protection solaire',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],

                [
                    'name' => 'Costume élégant pour occasions spéciales',
                    'price' => 4.99,
                    'description' => 'Costume élégant pour occasions spéciales',
                    'discount' => 0,
                    'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais'
                ],
            ],
        ];

        foreach ($categoriesData as $categoryName => $productsData) {
            $category = Categorie::where('name', $categoryName)->first();

            foreach ($productsData as $productData) {
                $product = Product::factory()->create([
                    'name' => $productData['name'],
                    'description' => $productData['description'],
                    'price' => $productData['price'],
                    'discount' => $productData['discount'],
                    'image' => $productData['image'],
                ]);

                $category->products()->attach($product);
            }
        }
     }
}
