<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            App\Student::create([
                'std_name' => $faker->name,
                'std_father_name' => $faker->userName,
                'std_contact_number' => $faker->phoneNumber,
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
