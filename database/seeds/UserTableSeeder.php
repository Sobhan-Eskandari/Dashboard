<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
<<<<<<< HEAD
=======
    /**
     * Run the database seeds.
     *
     * @return void
     */
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker::create('fa_IR');
        foreach (range(1,50) as $index) {
            User::create([
<<<<<<< HEAD
                'user_name'=>$faker->userName,
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>bcrypt('123'),
                'created_by'=>'1'
            ]);

=======
                'user_name'=>$faker->unique()->userName,
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>bcrypt('password'),
                'created_by'=>'1'
            ]);
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
        }
    }
}
