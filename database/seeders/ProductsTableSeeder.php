<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Harnais réfléchissant pour promenade nocturne',
                'description' => 'Le harnais réfléchissant pour promenade nocturne est l\'accessoire parfait pour assurer la sécurité de votre fidèle compagnon lors de vos sorties nocturnes. Fabriqué avec des matériaux hautement visibles et réfléchissants, ce harnais offre une visibilité accrue dans l\'obscurité, ce qui permet aux automobilistes et aux piétons de vous repérer plus facilement.  Grâce à sa conception ergonomique, ce harnais assure également le confort de votre animal tout au long de la promenade. Les sangles réglables garantissent un ajustement parfait, tandis que les matériaux doux et durables évitent les frottements et les irritations.  Que vous vous aventuriez en ville ou en pleine nature, ce harnais réfléchissant est l\'accessoire essentiel pour rendre vos promenades nocturnes plus sûres et agréables, offrant à la fois style et sécurité à votre animal de compagnie. Profitez de ces moments spéciaux en toute tranquillité d\'esprit.',
                'price' => '5.99',
                'discount' => 25,
                'image' => 'products\\September2023\\y5J2SedFEzhO7gPeJReO.jpg',
                'created_at' => '2023-09-12 01:28:00',
                'updated_at' => '2023-09-16 17:48:03',
                'partner_id' => 1,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Jouets puzzle pour chiens de petite, moyenne et grande taille',
                'description' => 'Jouet puzzle stimulant et intéressant pour chien : le jeu de cerveau pour chien est de niveau modéré avec plus de difficulté. Le puzzle de friandises pour chien est livré avec 2 types de compartiments de cachette de friandises pour garder votre chien concentré et mentalement stimulé pendant qu\'il recherche et renifle les friandises savoureuses',
                'price' => '17.99',
                'discount' => 10,
                'image' => 'products\\September2023\\1SictolFFqoQvCSlT6EW.jpg',
                'created_at' => '2023-09-16 18:35:00',
                'updated_at' => '2023-09-16 18:38:00',
                'partner_id' => 3,
            ),
        ));
        
        
    }
}