<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker::create('fa_IR');
        foreach (range(1,50) as $index) {
            User::create([
                'user_name'=>$faker->userName,
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>bcrypt('123'),
                'created_by'=>'1'
            ]);

        }
    }
}
