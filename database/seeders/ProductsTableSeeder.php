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
                'discount' => 25,
                'image' => 'products\\September2023\\i3WZEO7WmLYzDKJC0Eol.jpg',
                'created_at' => '2023-09-12 01:28:00',
                'updated_at' => '2023-09-11 21:32:40',
                'partner_id' => 1,
            ),
        ));
        
        
    }
}