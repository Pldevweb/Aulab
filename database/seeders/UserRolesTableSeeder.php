<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_roles')->delete();
        
        \DB::table('user_roles')->insert(array (
            0 => 
            array (
                'user_id' => 3,
                'role_id' => 3,
            ),
            1 => 
            array (
                'user_id' => 9,
                'role_id' => 1,
            ),
            2 => 
            array (
                'user_id' => 9,
                'role_id' => 3,
            ),
        ));
        
        
    }
}