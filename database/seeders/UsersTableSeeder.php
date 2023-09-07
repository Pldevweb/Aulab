<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'admin' => 0,
                'name' => 'pl',
                'email' => 'pl@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aRte/ueRsHcuGfbxru2pa.hW498GfwruYI.YY7GtPuSyNGe7a/WWK',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-09-07 01:00:47',
                'updated_at' => '2023-09-07 01:00:48',
            ),
        ));
        
        
    }
}