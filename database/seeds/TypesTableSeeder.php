<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


            for($i = 0; $i < 10; $i++) {
                $newTypename = $faker->word();

                $newType = new Type();

                $newType->type = $newTypename;
                $newType->slug = Str::slug($newTypename , '-');

                $newType->save();
            }
    }
}
