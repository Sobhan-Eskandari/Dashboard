<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        $roles = [
            [
                'role' => 'مدیر کل سایت',
            ],
            [
                'role' => 'مدیر تغییرات',
            ],
            [
                'role' => 'مدیر ساخت',
            ],
            [
                'role' => 'مدیر گزارش گیری',
            ],
            [
                'role' => 'مدیر پاک سازی',
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}
