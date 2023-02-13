<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'admin@example.com',
                'currency_id' => 1,
                'client_id' => 1,
                'warehouse_id' => Null,
                'CompanyName' => 'Purple',
                'CompanyPhone' => '08067158022',
                'CompanyAdress' => '304P 3rd floor Novare Center, Wuse Zone 5, Abuja',
                'footer' => 'Amabills - Ultimate Inventory With POS',
                'developed_by' => 'Amabills',
                'logo' => '57373729WhatsApp Image 2023-01-03 at 6.28.07 PM.jpeg',
            )
            
        );
    }
}
