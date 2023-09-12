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
                'name' => 'Pier-Luc Lemay',
                'email' => 'pierluclemay1@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZOwyT36VacVARbuV56HuP.1Z4PCoNm5ML.T.2OjyUMRi0K4H66Pza',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-09-12 01:10:49',
                'updated_at' => '2023-09-12 01:10:49',
            ),
        ));
        
        
    }
}