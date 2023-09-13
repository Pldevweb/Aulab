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
            1 => 
            array (
                'id' => 2,
                'name' => 'Citrouille',
                'description' => 'test',
                'price' => '1.99',
                'discount' => 1,
                'image' => 'products\\September2023\\wtOefe5FaTjP4dAiHVf0.jpg',
                'created_at' => '2023-09-12 13:40:00',
                'updated_at' => '2023-09-12 13:45:49',
                'partner_id' => 3,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'pomme',
                'description' => 'test',
                'price' => '3.99',
                'discount' => 10,
                'image' => 'products\\September2023\\1j1Ugz3JgoabU6pUVY62.png',
                'created_at' => '2023-09-12 13:48:50',
                'updated_at' => '2023-09-12 13:48:00',
                'partner_id' => 4,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'tess',
                'description' => 'tes',
                'price' => '1.99',
                'discount' => 1,
                'image' => 'products\\September2023\\QraqE0M5F9r2oLZzSPFF.webp',
                'created_at' => '2023-09-12 13:50:56',
                'updated_at' => '2023-09-12 13:50:00',
                'partner_id' => 2,
            ),
        ));
        
        
    }
}