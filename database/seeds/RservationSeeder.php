<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            ['starts_at' => '2020-11-30 16:00:00','ends_at' => '2020-11-30 17:00:00', 'club_id' => '1', 'terrain_id' => '1', 'user_id' => '1' ],
            ['starts_at' => '2020-11-30 18:00:00','ends_at' => '2020-11-30 19:00:00', 'club_id' => '3', 'terrain_id' => '1', 'user_id' => '1' ],
            ['starts_at' => '2020-11-30 16:00:00','ends_at' => '2020-11-30 19:00:00', 'club_id' => '2', 'terrain_id' => '2', 'user_id' => '2' ],

        ]);
    }
}
