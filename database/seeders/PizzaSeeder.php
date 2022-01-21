<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Margherita',
            'prijs' => '12.50',
        ]);

        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Pepperoni',
            'prijs' => '15.00',
        ]);

        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Hawaii',
            'prijs' => '10.00',
        ]);

        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Shoarma',
            'prijs' => '13.00',
        ]);

        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Salami',
            'prijs' => '11.00',
        ]);
        
        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Ham',
            'prijs' => '11.00',
        ]);
        
        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Cheese',
            'prijs' => '9.00',
        ]);

        DB::table('pizzas')->insert([
            'image' => 'images/pizza_margherita.png',
            'name' => 'Pizza Chicken Supreme',
            'prijs' => '20.00',
        ]);
    }
}
