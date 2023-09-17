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
                'name' => 'Danyka',
                'email' => 'danyka@hotmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HtgwsQkHPWzl2IMnfnWzVusT5xKdpBHHbJGat6QgsHUoFP643Gl.2',
                'address' => NULL,
                'city' => NULL,
                'zipcode' => NULL,
                'country' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-09-14 18:57:00',
                'updated_at' => '2023-09-14 18:57:01',
            ),
        ));


    }
}
