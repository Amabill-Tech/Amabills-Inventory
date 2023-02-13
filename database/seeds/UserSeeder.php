<?php

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
       // Insert some stuff
        DB::table('users')->insert(
            array(
                'id' => 1,
                'firstname' => 'Joseph',
                'lastname' => 'Purple',
                'username' => 'Purple',
                'email' => 'admin@example.com',
                'password' => '$2y$10$IFj6SwqC0Sxrsiv4YkCt.OJv1UV4mZrWuyLoRG7qt47mseP9mJ58u',
                'avatar' => '72334046photo_2021-01-29_01-09-42 (2).jpg',
                'phone' => '080XXXXXXXXX',
                'role_id' => 1,
                'statut' => 1,
            )
        );
    }
}
