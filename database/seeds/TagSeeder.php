<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();

        $faker = Faker::create("fa_IR");
        $tags = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 20) as $index){
            $tags[] = [
                'tag' => $faker->firstName,
                'created_at' => $time,
                'updated_at' => $time,
                'created_by' => '1',
            ];
        }

        DB::table('tags')->insert($tags);
    }
}
