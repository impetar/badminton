<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Croatia', 'native_name' => 'Hrvatska'] ,
            ['name' => 'Serbia', 'native_name' => 'Srbija'],
            ['name' => 'Germany', 'native_name' => 'Deutchlan']
        ]);
        
        }
}
