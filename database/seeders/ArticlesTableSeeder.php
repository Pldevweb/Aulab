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
                'id' => 3,
                'title' => 'Bla',
                'thumbnail' => 'articles/7eff0159ad11ffde25597007de377cfe.jpg',
                'content' => 'dhjuanskdas',
                'created_at' => '2023-09-06 22:37:00',
                'updated_at' => '2023-09-06 22:40:34',
                'user_id' => 2,
            ),
        ));


    }
}
