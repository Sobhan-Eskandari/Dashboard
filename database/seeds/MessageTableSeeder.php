<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->truncate();

        $faker = Faker::create("fa_IR");
        $messages = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 20) as $index){
            $messages[] = [
                'full_name' => $faker->name,
                'email' => $faker->email,
                'subject' => $faker->firstName,
                'message' => $faker->realText(300),
                'tracking_code' => \Faker\Provider\Uuid::uuid(),
                'created_at' => $time,
                'updated_at' => $time,
            ];
        }

        DB::table('messages')->insert($messages);
    }
}
