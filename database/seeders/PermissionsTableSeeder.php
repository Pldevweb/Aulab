<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-02 13:01:59',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-02 13:01:59',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-02 13:01:59',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-02 13:01:59',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-02 13:01:59',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-02 13:23:47',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-02 13:23:47',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-02 13:23:47',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-02 13:23:47',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-02 13:23:47',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-06 22:26:35',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-06 22:26:35',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-06 22:26:35',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-06 22:26:35',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-06 22:26:35',
            ),
        ));
        
        
    }
}