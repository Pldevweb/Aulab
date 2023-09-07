<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Accessoires',
                'slug' => 'accessories',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Accessoires de sport',
                'slug' => 'sport-accessories',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Jouets',
                'slug' => 'toys',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Nourriture',
                'slug' => 'food',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Produits de toilettage',
                'slug' => 'grooming-products',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Vêtements',
                'slug' => 'clothes',
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'article pour chat',
                'slug' => 'article-de-chat',
                'created_at' => '2023-09-03 16:07:53',
                'updated_at' => '2023-09-03 16:07:53',
            ),
        ));


    }
}
