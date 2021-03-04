<?php

use App\Institution;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            App\Institution::create([
                'ins_name' => $faker->sentence(10),
                'ins_phone_number' => $faker->phoneNumber,
                'ins_address' => $faker->text,
                'is_active' =>1,
                'created_at'=>date("Y-m-d H:i:s"),
            ]);
        }
    }
}
