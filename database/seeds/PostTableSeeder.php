<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Morilog\Jalali\Facades\jDate;
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        factory(App\Post::class, 50)->create();
=======
        DB::table('posts')->truncate();

        $faker = Faker::create("fa_IR");
        $posts = [];
        $time = jDate::forge('now')->format('datetime', true);

        foreach (range(1, 50) as $index){
            $posts[] = [
                'title' => $faker->firstName,
                'body' => $faker->realText(500),
                'created_at' => $time,
                'updated_at' => $time,
                'created_by' => '1',
                'updated_by' => '2',
            ];
        }

        DB::table('posts')->insert($posts);
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    }
}
