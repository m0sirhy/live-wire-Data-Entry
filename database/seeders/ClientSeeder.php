<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('ar_JO');
        foreach (range(1,3000) as $index) {
            DB::table('consumption_cycles')->insert([

                'full_name' => $faker->name,
                'mobile' => $faker->PhoneNumber,
                'address' => $faker->Address,
                'previous' => $faker->randomDigitNotNull,
                'curent' => $faker->randomDigitNotNull,


            ]);
        }
        //
    }
}
