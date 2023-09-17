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
                'role_id' => 2,
                'name' => 'Pier-Luc',
                'email' => 'pierluclemay1@hotmail.com',
                'avatar' => 'users\\September2023\\x7KutarI27swzIfifetX.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mOjawsivWqNMNVJ3aCB76.ukIGVPnB8gsCrZexwGqZu0BYVbb5ppi',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'remember_token' => NULL,
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-14 15:41:13',
                'updated_at' => '2023-09-16 16:19:57',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'pl',
                'email' => 'pierluclemay@hotmail.com',
                'avatar' => 'avatars/ooGku2zEkJSRwFhy79qV2nEVgLvQFtr8JdmX7Yif.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fHO6jf01a87Vway62hqVZ.1KowZTIVUiIELuX3IoJ4KHGARDDt/ra',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'remember_token' => NULL,
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-14 19:06:41',
                'updated_at' => '2023-09-14 21:48:50',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'Karine Lemay',
                'email' => 'zarahlita@hotmail.com',
                'avatar' => 'users\\September2023\\TEny22fqzxeSd5d768An.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$19pS5I3S7wzoRve2C3f1zu5ijha.sTElga7w4qDpKQI4fnSxmP58W',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'remember_token' => NULL,
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-14 21:41:06',
                'updated_at' => '2023-09-16 18:45:13',
            ),
        ));
    }
}
