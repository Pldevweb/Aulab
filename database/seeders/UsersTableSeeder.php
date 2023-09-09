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
                'id' => 3,
                'role_id' => 3,
                'admin' => 0,
                'name' => 'Karine Lemay',
                'email' => 'zarahlita@hotmail.com',
                'avatar' => 'users\\September2023\\brur32fYw8DWk3tzx7vt.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lk5nTLGiGc1/YRHU86axROn2Y8VgZNdaxBRWnkGkP9A9xRGCBJ08q',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => 'AXNMoJhAkDrYRI6pt6amjxdXlTijygQhcE8v8ZBvgBPExEb4lb2VNVELdf8A',
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-08 22:51:16',
                'updated_at' => '2023-09-08 23:02:38',
            ),
            1 => 
            array (
                'id' => 8,
                'role_id' => NULL,
                'admin' => 0,
                'name' => 'jean',
                'email' => 'jean@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9IcnaBSk/knHVMPXlLf4JO9ki1cezXaY9bDkHsH/FzwpSPuIgkP1G',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => 'efdACqNtFSIgfxfyJQFb7d7zd4zZgkTryPHs9f3i93zejdAmksHVYq3oh7O9',
                'settings' => NULL,
                'created_at' => '2023-09-08 23:35:45',
                'updated_at' => '2023-09-08 23:35:45',
            ),
            2 => 
            array (
                'id' => 9,
                'role_id' => 1,
                'admin' => 0,
                'name' => 'Pier-Luc Lemay',
                'email' => 'pierluclemay1@hotmail.com',
                'avatar' => 'users\\September2023\\VPBYoaUR7jlzjf8HA83v.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PG3aP1ru0vfL2JARp5tW1uOOo7j0fDVuJYV6RwZ01ncY8UVgJqoM6',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => NULL,
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-08 23:39:52',
                'updated_at' => '2023-09-09 00:10:15',
            ),
        ));
        
        
    }
}