<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
                'role' => 'Client',
            ],
            [
                'id' => 2,
                'role' => 'Company',
            ],
            [
                'id' => 3,
                'role' => 'Admin',
            ]
        ];

        DB::table('role')->insert(
            $array
        );
    }
}
