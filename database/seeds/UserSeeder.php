<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['first_name' => 'Petar','last_name' => 'Jexivjetar', 'email' => 'kajtebriga@o2.hr', 'password' => Hash::make('1234556'), 'last_login' => '2020-2-11 4:15:45', 'role_id' =>'1' ] ,
            ['first_name' => 'Luka','last_name' => 'Lukica', 'email' => 'llukic@gmail.com', 'password' =>Hash::make('fsdfsdfsdfsdf'), 'last_login' => '2020-11-15 6:15:45', 'role_id' =>'2'],

        ]);
    }
}
