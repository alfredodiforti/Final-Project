<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


            for($i = 0; $i < 10; $i++) {

                $newOrder = new Order();

                $newOrder->name = $faker->word();
                $newOrder->surname = $faker->word();
                $newOrder->email = $faker->email();
                $newOrder->address = $faker->sentence();
                $newOrder->phone = $faker->randomNumber(9,true);
                $newOrder->payment_status= $faker->boolean();

                $newOrder->save();
            }
    }
}
