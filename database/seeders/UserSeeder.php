<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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
            DB::table('users')->insert
            ([
                    "user"=>$faker->name(),
                    "email"=>$faker->email(),
                    "email_verified_at" => now()->format('Y-m-d H:i:s'),
                    "password"=>$faker->password(),
                    "remember_token"=>$faker->password(),
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
