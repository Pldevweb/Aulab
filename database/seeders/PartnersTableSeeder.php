<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Heidenreich, Kessler and Hauck',
                'logo' => 'https://via.placeholder.com/640x480.png/0066cc?text=doloribus',
                'created_at' => '2023-09-12 00:31:36',
                'updated_at' => '2023-09-12 00:31:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tillman-Mueller',
                'logo' => 'https://via.placeholder.com/640x480.png/00eeff?text=et',
                'created_at' => '2023-09-12 00:31:36',
                'updated_at' => '2023-09-12 00:31:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pouros PLC',
                'logo' => 'https://via.placeholder.com/640x480.png/002222?text=qui',
                'created_at' => '2023-09-12 00:31:36',
                'updated_at' => '2023-09-12 00:31:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Bauch, O\'Keefe and Gerlach',
                'logo' => 'https://via.placeholder.com/640x480.png/007711?text=temporibus',
                'created_at' => '2023-09-12 00:31:36',
                'updated_at' => '2023-09-12 00:31:36',
            ),
        ));
        
        
    }
}