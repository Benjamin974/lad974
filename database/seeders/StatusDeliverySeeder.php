<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusDeliverySeeder extends Seeder
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
                'status' => 'en attente d\'un livreur',
            ],
            [
                'id' => 3,
                'status' => 'livrer'
            ]
        ];

        DB::table('status_delivery')->insert(
            $array
        );
    }
}
