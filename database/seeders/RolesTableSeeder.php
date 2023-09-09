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
                'name' => 'dev',
                'display_name' => 'Développeur',
                'created_at' => '2023-09-07 01:00:47',
                'updated_at' => '2023-09-08 22:29:27',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'display_name' => 'Administrateur',
                'created_at' => '2023-09-08 22:28:57',
                'updated_at' => '2023-09-08 22:30:13',
            ),
        ));
        
        
    }
}