<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Nouveau collier pour chien sportif!',
                'thumbnail' => 'articles\\September2023\\TkqIQzP84qy9xh5fpWHb.jpg',
                'content' => 'Découvrez notre Collier Canin Sportif ! Conçu pour le compagnon canin actif et aventurier, ce collier est le parfait mélange entre style et fonctionnalité. Fabriqué avec des matériaux durables et résistants aux intempéries, il peut résister même aux aventures en plein air les plus exigeantes.',
                'created_at' => '2023-09-14 20:22:00',
                'updated_at' => '2023-09-14 21:45:02',
                'user_id' => 3,
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Pompette à soir',
                'thumbnail' => 'articles\\September2023\\q63xEuDGULctQ7RwZbam.jpg',
                'content' => 'Venez prendre une brosse avec moi!',
                'created_at' => '2023-09-14 21:54:48',
                'updated_at' => '2023-09-14 21:54:48',
                'user_id' => 3,
            ),
        ));
        
        
    }
}