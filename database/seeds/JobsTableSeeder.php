<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Job::truncate();

        // $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            $j=0;
            Job::create([
                'title' => str_random(20),
                'description' => str_random(70),
                'local' => str_random(10),
                'title' => str_random(15),
                'remote' => 'no',
                'type' => 3,
                'company_id' => 1
            ]);
        }
    }
}
