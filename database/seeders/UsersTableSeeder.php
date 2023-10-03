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
                'name' => 'Pier-Luc Lemay',
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
                'updated_at' => '2023-10-02 18:01:24',
            ),
            1 => 
            array (
                'id' => 2,
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
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Danyka Enair',
                'email' => 'danyka.dev@gmail.com',
                'avatar' => 'avatars/gwGG1heIGjuyPNUqIxCOmZ2ccsIDYuYkcrIvQEAz.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Zu3DoOmg8POX1U/Shxd9je8TwRDHng7R.REglrsWOYnzabahr2l1e',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'remember_token' => 'fjIfFOisDcTVqNFoQz6KHsQYdUjtzOnkbHaW4mEtCtmHKU6VnCHs3bpjDIxO',
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-10-02 17:55:51',
                'updated_at' => '2023-10-02 18:00:20',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => NULL,
                'name' => 'Compte Utilisateur',
                'email' => 'test@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BaTg6AHmLYrMzulxKV.HFOu6URFzWDrHpxIFq1q3rVXTQhelSpE1C',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'remember_token' => 'jPGFC0NSSNlRtAgsQ6S6CtBf5Qja1pBj9xICckcROJsJI4V1GH2xd5L8ZPbN',
                'settings' => NULL,
                'created_at' => '2023-10-03 16:50:25',
                'updated_at' => '2023-10-03 16:50:25',
            ),
        ));
        
        
    }
}