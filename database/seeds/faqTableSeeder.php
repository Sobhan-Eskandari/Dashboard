<?php

use App\FAQ;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class faqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('f_a_q_s')->truncate();
        $faker = Faker::create('fa_IR');
        foreach (range(1,10) as $index){
            FAQ::create([
                'question'=>$faker->paragraph,
                'answer'=>$faker->paragraph,
                'created_by'=>'1'
            ]);
        }
    }
}
