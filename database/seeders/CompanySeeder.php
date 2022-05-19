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
                'name' => 'Carphour',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => 0,
                'picture' => '/storage/images/logo-company.png',
                'secteur' => 'Nord',
                'id_user' => 3,
            ],
            [
                'id' => 2,
                'name' => 'Theclerc',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => null,
                'picture' => '/storage/images/logo-company.png',
                'secteur' => 'Nord',
                'id_user' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Vital',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => null,
                'picture' => '/storage/images/logo-company.png',
                'secteur' => 'Nord',
                'id_user' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Bricolage',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'note' => null,
                'picture' => '/storage/images/logo-company.png',
                'secteur' => 'Nord',
                'id_user' => 1,
            ]
        ];

        DB::table('company')->insert(
            $array
        );
    }
}
