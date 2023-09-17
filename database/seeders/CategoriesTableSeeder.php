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
                'slug' => 'accessoires',
                'created_at' => '2023-08-31 21:26:00',
                'updated_at' => '2023-09-17 08:50:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Accessoires de sport',
                'slug' => 'accessoires de sport',
                'created_at' => '2023-08-31 21:26:00',
                'updated_at' => '2023-09-17 08:50:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Jouets',
                'slug' => 'jouets',
                'created_at' => '2023-08-31 21:26:00',
                'updated_at' => '2023-09-17 09:07:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Nourriture',
                'slug' => 'nourriture',
                'created_at' => '2023-08-31 21:26:00',
                'updated_at' => '2023-09-17 09:08:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Produits de toilettage',
                'slug' => 'produits de toilettage',
                'created_at' => '2023-08-31 21:26:00',
                'updated_at' => '2023-09-17 09:08:22',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Vêtements',
                'slug' => 'Vetements',
                'created_at' => '2023-08-31 21:26:00',
                'updated_at' => '2023-09-17 08:50:46',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'boite',
                'slug' => 'boite',
                'created_at' => '2023-09-07 23:37:34',
                'updated_at' => '2023-09-07 23:37:34',
            ),
        ));
        
        
    }
}