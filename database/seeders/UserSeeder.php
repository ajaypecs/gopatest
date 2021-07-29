<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert
        ([
        	$faker = Faker::create();
        	foreach (range(1,50) as $list) {
        		DB::table('users')->
        		([
        			"user"=>$faker->user,
        			"email"=>$faker->email,
        			"email_verified_at"=>$faker->date('Y:m:d'),
        			"remember_token"=>$faker->password,
        			"password"=>$faker->password,

        		])
        	}
        	'user'=>'Ajay',
        	'email'=>'ajay@gmail.com',
        	'password'=>Hash::make('Pass123'),
        ])
    }
}
