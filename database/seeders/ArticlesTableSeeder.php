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
                'thumbnail' => 'articles\\September2023\\9N2IDXuVBp2B8N9ucprw.jpg',
                'content' => '<p>D&eacute;couvrez notre Collier Canin Sportif ! Con&ccedil;u pour le compagnon canin actif et aventurier, ce collier est le parfait m&eacute;lange entre style et fonctionnalit&eacute;. Fabriqu&eacute; avec des mat&eacute;riaux durables et r&eacute;sistants aux intemp&eacute;ries, il peut r&eacute;sister m&ecirc;me aux aventures en plein air les plus exigeantes.</p>',
                'created_at' => '2023-09-14 20:22:00',
                'updated_at' => '2023-09-21 20:18:18',
                'user_id' => 3,
            ),
            1 => 
            array (
                'id' => 7,
                'title' => 'usahdjsad',
                'thumbnail' => 'articles\\September2023\\3eEA0vjuGphPpdxC9jcZ.jpg',
                'content' => '<p><strong>dfsadasdas</strong></p>
<p><em>salut</em></p>
<p><span style="text-decoration: underline;"><em>sadij;aoskldmasd</em></span></p>',
                'created_at' => '2023-09-21 20:31:00',
                'updated_at' => '2023-09-21 20:36:49',
                'user_id' => 4,
            ),
        ));
        
        
    }
}