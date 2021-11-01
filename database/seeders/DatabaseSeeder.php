<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DeliveryAddressSeeder::class,
            CompanySeeder::class,
            DeliveryManSeeder::class,
            ProductSeeder::class,
            CommandSeeder::class,
            StatusCommandSeeder::class,
            // CommandSeeder::class,
            StatusDeliverySeeder::class,
            // DeliverySeeder::class
        ]);
    }
}
