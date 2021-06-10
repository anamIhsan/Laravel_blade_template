<?php

namespace Database\Seeders;

use Faker\Factory;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->truncate();

        $faker = Factory::create('id_ID');

        $gender = ['l', 'p'];

        $religion = ['islam', 'kristen', 'katolik', 'budha', 'hindu'];

       for ($i=0; $i < 20; $i++) { 
            DB::table('teachers')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(17, 30),
                'address' => $faker->address,
                'gender' => $faker->randomElement($gender),
                'phoneNumber' => $faker->phoneNumber,
                'email' => $faker->email,
                'birth_date' => $faker->date,
                'description' => $faker->text,
                'religion' => $faker->randomElement($religion),   
            ]);
       }
    }
}
