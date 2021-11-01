<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryManSeeder extends Seeder
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
                'name' => 'Hugo Burn',
                'address' => '30 chemin du fake',
                'email' => 'hugo@delivery.com',
                'phone_number' => '0692121212',
                'id_company' => 1,
            ]
        ];

        DB::table('delivery_man')->insert(
            $array
        );
    }
}
