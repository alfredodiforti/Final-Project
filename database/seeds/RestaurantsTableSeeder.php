<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        
            for($i = 0; $i < 10; $i++) {
                $nameRestaurant = $faker->word();

                $newRestaurant = new Restaurant();

                $newRestaurant->name = $nameRestaurant;
                $newRestaurant->email = $faker->email();
                $newRestaurant->phone = $faker->randomNumber(9, true);
                $newRestaurant->address = $faker->sentence();
                $newRestaurant->slug = Str::slug($nameRestaurant , '-');

                $newRestaurant->save();
            }     
    }
}
