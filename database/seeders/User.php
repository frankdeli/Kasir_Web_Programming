<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'role_id' => '1',
            'name' => 'Willy',
            'image' => '',
            'email' => 'willy@gmail.com',
            'password' => '$2y$10$TNn43c.hQQMT5.80R1bnk.PXeETfyK/Zk3nr3leyFLkhiLcmvw/kq',
        ]);
    }
}
