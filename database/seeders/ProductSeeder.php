<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
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
        	DB::table('products')->insert
        	([
        	'name'=> $faker->name(),
        	'created_at' => now()->format('Y-m-d H:i:s'),
    		'updated_at' => now()->format('Y-m-d H:i:s'),
        	]);
        }
    }
}
