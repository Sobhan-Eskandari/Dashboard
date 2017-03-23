<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(FriendsSeeder::class);
        //$this->call(TodoSeeder::class);
        $this->call(TagSeeder::class);
    }
}
