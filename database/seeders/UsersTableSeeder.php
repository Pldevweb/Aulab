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
                'id' => 2,
                'role_id' => 1,
                'admin' => 0,
                'name' => 'danyka',
                'email' => 'cutie@hotmail.com',
                'avatar' => 'users\\September2023\\XEKfPiIf2jax9XxxWVKT.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ycgn6ldmfU3IGJK7HY8ibexvX4XMyo/1vhcSHf23RqOnJNqcGvCHW',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'profile_photo' => NULL,
                'remember_token' => NULL,
                'settings' => '{"locale":"fr"}',
                'created_at' => '2023-09-06 22:02:29',
                'updated_at' => '2023-09-06 23:19:53',
            ),
        ));
        
        
    }
}