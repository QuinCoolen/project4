<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            'customer_id' => '1',
            'status' => 'pizzas voorbereiden',
            'totalprice' => '39.50',
        ]);
    }
}
