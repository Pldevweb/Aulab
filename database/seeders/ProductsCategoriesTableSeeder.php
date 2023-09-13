<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products_categories')->delete();
        
        \DB::table('products_categories')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'updated_at' => NULL,
                'product_id' => 1,
                'categorie_id' => 1,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'updated_at' => NULL,
                'product_id' => 2,
                'categorie_id' => 2,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'updated_at' => NULL,
                'product_id' => 4,
                'categorie_id' => 4,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'updated_at' => NULL,
                'product_id' => 5,
                'categorie_id' => 4,
            ),
        ));
        
        
    }
}