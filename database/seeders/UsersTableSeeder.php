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
                'role_id' => NULL,
                'admin' => 1,
                'name' => 'Admin',
                'email' => 'email@email.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2023-08-31 21:26:24',
                'password' => '$2y$10$kWUgeUF7r/08G04Cxm2Ez.Cl.2gP2mg/9HfNw1VpN4/w2z9R8zQAK',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => 'jq7Cmd7Ssj',
                'settings' => NULL,
                'created_at' => '2023-08-31 21:26:24',
                'updated_at' => '2023-08-31 21:26:24',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'admin' => 0,
                'name' => 'pierluc Lemay',
                'email' => 'pi-el_gangsta@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TQaPf6I4flo2CnEzSbwh/uDLg8FZuzEe0iwuxt7MC5/TZjkjAeJV2',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => '6E3uV4edAjy5YDq6urQVIvbQipl8glZmrXmxojAbgviZCG6w7e1cfIAXsZGO',
                'settings' => NULL,
                'created_at' => '2023-08-31 23:58:21',
                'updated_at' => '2023-09-02 12:32:04',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'admin' => 0,
                'name' => 'Pier-Luc Lemay',
                'email' => 'pierluclemay1@hotmail.com',
                'avatar' => 'users\\September2023\\fKRXsKcPbQ2FWiQy2KdV.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/pXWpyxA9eZyvvY30KfCouQf9kznm3gLMqIiL7rm/mZYbqAnKJZkm',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => 'https://scontent-lga3-2.xx.fbcdn.net/v/t39.30808-1/244489589_10158368492430677_1272175015859380786_n.jpg?stp=dst-jpg_s200x200&_nc_cat=104&ccb=1-7&_nc_sid=fe8171&_nc_ohc=-P802jbWLbUAX_BeAc6&_nc_ht=scontent-lga3-2.xx&oh=00_AfA3J2U90R9XMCeKyG_9gg34HXxpKaX7Ic',
                'remember_token' => NULL,
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-02 12:36:14',
                'updated_at' => '2023-09-02 16:34:36',
            ),
        ));
        
        
    }
}