<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'name' => 'benjamin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'id_role' => 3,
            ],
            [
                'id' => 2,
                'name' => 'Stella Michel',
                'email' => 'client@gmail.com',
                'password' => bcrypt('password'),
                'id_role' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Ulrich Bonnet',
                'email' => 'company@gmail.com',
                'password' => bcrypt('password'),
                'id_role' => 2,
            ],

        ];

        DB::table('users')->insert(
            $array
        );
    }
}
