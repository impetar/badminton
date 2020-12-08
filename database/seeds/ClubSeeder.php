<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            ['club_name' => 'BK Beograd','country_id' => '2'],
            ['club_name' => 'BK Medvedgrad','country_id' => '1'],
            ['club_name' => 'Marlex','country_id' => '3'],
            ['club_name' => 'BK Čačak','country_id' => '2']
        ]);
    }
}
