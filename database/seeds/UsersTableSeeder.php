<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            for($i = 0; $i < 10; $i++) {

                $newUser = new User();
                $newUser->restaurant_id = $i+1;
                $newUser->name = $faker->word();
                $newUser->surname = $faker->word();
                $newUser->email = $faker->email();
                $newUser->password = $faker->password();
                $newUser->vat = $faker->randomNumber(9, true);


                $newUser->save();
            }
    }
}
