<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $faker = Factory::create('id_ID');

        $type = ['makanan', 'minuman', 'cemilan'];

        for ($i=0; $i < 15; $i++) { 
            DB::table('products')->insert([
                'name' => $faker->name,
                'price' => $faker->numberBetween(10000, 1000000),
                'Production_date' => $faker->date,
                'expired' => $faker->date,
                'type' => $faker->randomElement($type),
                'description' => $faker->text,
                'stock' => $faker->numberBetween(0, 100),
                'produser' => $faker->name,
                'address' => $faker->address,
                'postcode' => $faker->numberBetween(10, 20),
                'status' => $faker->boolean()
            ]);
        }
    }
}
