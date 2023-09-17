<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Admin',
                'created_at' => '2023-09-12 01:10:49',
                'updated_at' => '2023-09-12 01:10:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'developper',
                'display_name' => 'Développeur',
                'created_at' => '2023-09-12 11:42:00',
                'updated_at' => '2023-09-12 11:42:00',
            ),
        ));
        
        
    }
}