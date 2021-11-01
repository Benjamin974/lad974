<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusCommandSeeder extends Seeder
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
                'status' => 'en cours',
            ],
            [
                'id' => 2,
                'status' => 'payer',
            ]
        ];

        DB::table('status_command')->insert(
            $array
        );
    }
}
