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
//        $this->call(UserTableSeeder::class);
//        $this->call(FriendTableSeeder::class);
//        $this->call(TodoTableSeeder::class);
//        $this->call(TagTableSeeder::class);
//        $this->call(FaqTableSeeder::class);
//        $this->call(CategoryTableSeeder::class);
//        $this->call(MessageTableSeeder::class);
//        $this->call(PostTableSeeder::class);
        $this->call(InboxTableSeeder::class);
    }
}
