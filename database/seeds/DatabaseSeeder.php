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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
//        $this->call(FriendsSeeder::class);
//        $this->call(TodoSeeder::class);
//        $this->call(TagSeeder::class);
//        $this->call(UserTableSeeder::class);
        $this->call(faqTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(PostTableSeeder::class);
=======
        $this->call(UserTableSeeder::class);
        $this->call(FriendTableSeeder::class);
        $this->call(TodoTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(InboxTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(RoleTableSeeder::class);
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    }
}
