<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            RestaurantsTableSeeder::class,
            OwnersTableSeeder::class,
            TypesTableSeeder::class,
            FoodsTableSeeder::class,
            OrdersTableSeeder::class
         ]);
    }
}
