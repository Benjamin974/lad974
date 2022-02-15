<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ratingArray = [
            [
                'id' => 1,
                'note' => 3,
                'id_company' => 1
            ],
            [
                'id' => 2,
                'note' => 4,
                'id_company' => 1

            ]
        ];

        DB::table('rating')->insert(
            $ratingArray
        );
    }
}
