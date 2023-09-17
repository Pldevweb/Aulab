<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Tableau de bord',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-02 12:04:47',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Médiathèque',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Utilisateurs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Rôles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Outils',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Créateur de menus',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-03 16:48:33',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Base de données',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-03 16:48:33',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-03 16:48:33',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-03 16:48:33',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Paramètres',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2023-09-02 12:04:47',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Produits',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-paw',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2023-09-02 13:01:59',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => 'voyager.products.index',
                'parameters' => 'null',
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Catégories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-pen',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2023-09-02 13:23:47',
                'updated_at' => '2023-09-07 01:13:13',
                'route' => 'voyager.categories.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Articles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2023-09-06 22:26:35',
                'updated_at' => '2023-09-07 01:14:12',
                'route' => 'voyager.articles.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Site Accueil',
                'url' => 'http://localhost:8000',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2023-09-07 01:13:05',
                'updated_at' => '2023-09-07 01:18:01',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}