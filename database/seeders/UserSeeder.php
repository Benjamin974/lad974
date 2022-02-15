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
                'id_role' => 4,
                'banned_until' => false,
            ],
            [
                'id' => 2,
                'name' => 'Stella Michel',
                'email' => 'client@gmail.com',
                'password' => bcrypt('password'),
                'id_role' => 1,
                'banned_until' => false,
            ],
            [
                'id' => 3,
                'name' => 'Ulrich Bonnet',
                'email' => 'company@gmail.com',
                'password' => bcrypt('password'),
                'id_role' => 2,
                'banned_until' => false,
            ],
            [
                'id' => 4,
                'name' => 'Alphonso Gambert',
                'email' => 'deliveryman@gmail.com',
                'password' => bcrypt('password'),
                'id_role' => 3,
                'banned_until' => false,
            ],

        ];

        DB::table('users')->insert(
            $array
        );
    }
}
