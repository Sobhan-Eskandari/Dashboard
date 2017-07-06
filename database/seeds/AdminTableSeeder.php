<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $faker = Faker::create('fa_IR');
        foreach (range(1,50) as $index) {
            Admin::create([
                'user_name' => $faker->unique()->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'role_id' => rand(1,5),
                'password' => bcrypt('password'),
                'created_by' => '1'
            ]);
        }
    }
}
