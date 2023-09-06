<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Harnais réfléchissant pour promenade nocturne',
                'description' => 'Assurez la sécurité de votre ami à quatre pattes lors des promenades nocturnes avec ce harnais réfléchissant.',
                'price' => '5.99',
                'discount' => 10,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Gamelle antidérapante pour chien',
                'description' => 'Offrez à votre chien une gamelle antidérapante pour des repas confortables.',
                'price' => '3.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Laisse extensible pour plus de liberté',
                'description' => 'Laisse extensible pour plus de liberté',
                'price' => '8.99',
                'discount' => 15,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sac de transport confortable pour petit chien',
                'description' => 'Sac de transport confortable pour petit chien',
                'price' => '14.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Gourde avec compartiment pour friandises',
                'description' => 'Gourde avec compartiment pour friandises',
                'price' => '6.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sac à dos de randonnée pour chien',
                'description' => 'Sac à dos de randonnée pour chien',
                'price' => '7.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Balle de jeu flottante',
                'description' => 'Balle de jeu flottant',
                'price' => '2.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Bandeau de sport pour chien',
                'description' => 'Bandeau de sport pour chien',
                'price' => '1.99',
                'discount' => 10,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Jouet à mâcher en corde',
                'description' => 'Jouet à mâcher en corde',
                'price' => '4.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Jouet à lancer et rapporter',
                'description' => 'Jouet à lancer et rapporter',
                'price' => '3.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Puzzle de nourriture pour stimuler l\'intelligence',
                'description' => 'Puzzle de nourriture pour stimuler l\'intelligence',
                'price' => '7.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Peluche douce pour réconforter',
                'description' => 'Peluche douce pour réconforter',
                'price' => '2.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Croquettes haut de gamme au poulet',
                'description' => 'Croquettes haut de gamme au poulet',
                'price' => '8.99',
                'discount' => 50,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Friandises naturelles au saumon',
                'description' => 'Friandises naturelles au saumon',
                'price' => '4.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Aliments en boîte équilibrés',
                'description' => 'Aliments en boîte équilibrés',
                'price' => '4.99',
                'discount' => 30,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 15,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Barres énergétiques pour chien actif',
                'description' => 'Barres énergétiques pour chien actif',
                'price' => '4.99',
                'discount' => 5,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 16,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Shampooing hypoallergénique pour peau sensible',
                'description' => 'Shampooing hypoallergénique pour peau sensible',
                'price' => '4.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 17,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Brosse de toilettage démêlante',
                'description' => 'Brosse de toilettage démêlante',
                'price' => '4.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 18,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Ciseaux de toilettage professionnels',
                'description' => 'Ciseaux de toilettage professionnels',
                'price' => '11.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 19,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Parfum sans alcool pour chien',
                'description' => 'Parfum sans alcool pour chien',
                'price' => '44.99',
                'discount' => 20,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 20,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Manteau imperméable pour les jours de pluie',
                'description' => 'Manteau imperméable pour les jours de pluie',
                'price' => '4.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 21,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Pull en laine pour garder au chaud',
                'description' => 'Pull en laine pour garder au chaud',
                'price' => '8.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 22,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Chapeau avec protection solaire',
                'description' => 'Chapeau avec protection solaire',
                'price' => '7.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 23,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Costume élégant pour occasions spéciales',
                'description' => 'Costume élégant pour occasions spéciales',
                'price' => '4.99',
                'discount' => 0,
                'image' => 'https://img.20mn.fr/2c2xoZqdQhu84Dmhb8ci9Sk/1200x768_le-berger-australien-est-le-chien-prefere-des-francais',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
                'partner_id' => 24,
            ),
            24 => 
            array (
                'id' => 29,
                'name' => 'Insecte',
                'description' => 'En général, les insectes sont un groupe diversifié de petits arthropodes à six pattes qui constituent le groupe d\'animaux le plus important sur Terre. On les trouve dans pratiquement tous les habitats terrestres et ils jouent un rôle essentiel dans les écosystèmes et l\'environnement. Voici quelques caractéristiques générales et informations sur les insectes .',
                'price' => '3.99',
                'discount' => 10,
                'image' => 'https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/c/3/4/c3449c7cc8_49335_def-insecte-mariea-flickr.jpg',
                'created_at' => '2023-09-03 12:26:53',
                'updated_at' => '2023-09-03 12:26:53',
                'partner_id' => 2,
            ),
            25 => 
            array (
                'id' => 30,
                'name' => 'Chaussure',
                'description' => 'chaussure',
                'price' => '19.99',
                'discount' => 20,
                'image' => 'https://m.media-amazon.com/images/I/71amUHr6mCL.jpg',
                'created_at' => '2023-09-03 16:05:40',
                'updated_at' => '2023-09-03 16:05:40',
                'partner_id' => 2,
            ),
        ));
        
        
    }
}