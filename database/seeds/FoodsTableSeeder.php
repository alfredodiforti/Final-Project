<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Food;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            for($i = 0; $i < 10; $i++) {

                // $newMenu = $i+1;

                //for($u = 0; $u < 3; $u++){
                    $nameFood=$faker->word();

                    $newFood = new Food();

                    $newFood->restaurant_id=$i+1;
                    $newFood->name = $nameFood;
                    $newFood->description = $faker->sentence();
                    $newFood->price = $faker->randomFloat(2,10,30);
                    $newFood->photo = $faker->imageUrl(640,480);
                    $newFood->visibility = $faker->boolean();
                    $newFood->ingredients = $faker->sentence();
                    $newFood->allergenic = $faker->sentence();

                    $newFood->slug = Str::slug($nameFood , '-');

                    $newFood->save();
                //}
            }
    }
}
