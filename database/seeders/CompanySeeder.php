<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
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
                'name' => 'carrefour',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => 0,
                'picture' => '/storage/images/carrefour.png',
                'secteur' => 'Nord',
                'id_user' => 3,
            ],
            [
                'id' => 2,
                'name' => 'Leclerc',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => null,
                'picture' => '/storage/images/leclerc.jpg',
                'secteur' => 'Nord',
                'id_user' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Vival',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => null,
                'picture' => '/storage/images/vival.png',
                'secteur' => 'Nord',
                'id_user' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Bricolage',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => null,
                'picture' => '/storage/images/bricolage.jpg',
                'secteur' => 'Nord',
                'id_user' => 1,
            ]
        ];

        DB::table('company')->insert(
            $array
        );
    }
}
