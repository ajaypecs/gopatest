<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();
        foreach (range(1,100) as $value) {
        	DB::table('emails')->insert
        	([
        	'email' => $faker->safeEmail,
        	'company'=> $faker->name().' Pvt. Ltd.',
        	]);
        }
    }
}
