<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            ['invoice_date' => '2020-11-30 17:15:45','price_total' => '75.00', 'reservation_id' => '1'] ,
            ['invoice_date' => '2020-11-30 19:11:30','price_total' => '200.00', 'reservation_id' => '3'],
            ['invoice_date' => '2020-2-11 19:17:11','price_total' => '140','reservation_id' => '2' ]
        ]);
    }
}
