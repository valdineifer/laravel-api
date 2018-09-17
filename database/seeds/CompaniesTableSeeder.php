<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Company::truncate();

        // $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 3; $i++) {
            Company::create([
                'name' => str_random(20),
                'email' => str_random(15),
                'website' => str_random(25),
                'logo' => str_random(10),
                'password' => str_random(16)
            ]);
        }
    }
}
