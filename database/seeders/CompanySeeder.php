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
                'name' => 'carefour',
                'address' => '20 chemin du fake',
                'city' => 'Saint Denis',
                'id_user' => 1,
            ]
        ];

        DB::table('company')->insert(
            $array
        );
    }
}
