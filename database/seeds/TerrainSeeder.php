<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TerrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terrains')->insert([
            ['size' => '2','price' => '100', 'description' => 'teren 1 za igru u parovima' ] ,
            ['size' => '1','price' => '70', 'description' => 'teren 2 1/1'],
            ['size' => '2','price' => '70', 'description' => 'teren3 1/1']

        ]);
    }
}
