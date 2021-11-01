<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'id' => 1,
                'name' => 'RedWin',
                'description' => 'Bouteille de vin rouge',
                'price' => 10,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Nintendo Switch',
                'description' => 'Console de jeu vidéo',
                'price' => 300,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Haltère',
                'description' => 'Haltère permettant de se musclé en exécutant certains mouvements',
                'price' => 300,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 4,
                'name' => 'RedWin',
                'description' => 'Bouteille de vin rouge',
                'price' => 10,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Nintendo Switch',
                'description' => 'Console de jeu vidéo',
                'price' => 300,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Haltère',
                'description' => 'Haltère permettant de se musclé en exécutant certains mouvements',
                'price' => 300,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 7,
                'name' => 'RedWin',
                'description' => 'Bouteille de vin rouge',
                'price' => 10,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Nintendo Switch',
                'description' => 'Console de jeu vidéo',
                'price' => 300,
                'quantite' => 30,
                'id_company' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Haltère',
                'description' => 'Haltère permettant de se musclé en exécutant certains mouvements',
                'price' => 300,
                'quantite' => 30,
                'id_company' => 1,
            ]
        ];

        DB::table('product')->insert(
            $array
        );
    }
}
