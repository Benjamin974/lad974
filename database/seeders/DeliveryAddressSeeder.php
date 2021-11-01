<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryAddressSeeder extends Seeder
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
                'address' => '80 chemin du fake',
                'postal_code' => '97400',
                'phone_number' => '0692121212',
                'id_user' => 2,
            ]
        ];

        DB::table('delivery_address')->insert(
            $array
        );
    }
}
