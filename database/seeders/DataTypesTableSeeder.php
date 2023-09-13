<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Utilisateur',
                'display_name_plural' => 'Utilisateurs',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Rôle',
                'display_name_plural' => 'Rôles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Produit',
                'display_name_plural' => 'Produits',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Product',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-12 13:39:40',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Categorie',
                'display_name_plural' => 'Categories',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Categorie',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-02 13:23:47',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'articles',
                'slug' => 'articles',
                'display_name_singular' => 'Article',
                'display_name_plural' => 'Articles',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Article',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"title","scope":null}',
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-06 22:38:59',
            ),
        ));
        
        
    }
}