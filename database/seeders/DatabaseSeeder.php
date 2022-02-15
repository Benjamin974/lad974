<?php

namespace Database\Seeders;

use App\Utils\CompanyUtils;
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
            CompanySeeder::class,
            RatingSeeder::class,
            ProductSeeder::class,
            CommandSeeder::class,
            StatusCommandSeeder::class,
            // CommandSeeder::class,
            StatusDeliverySeeder::class,
            // DeliverySeeder::class
        ]);

        CompanyUtils::addCompaniesNote();
    }
}
