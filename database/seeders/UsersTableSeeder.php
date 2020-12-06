<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "個人太郎",
            'number' => "00001",
            'date' => "2020/12/1",
            'dep' => "株式会社〇〇",
            'group' => "××Gr,",
            'customer' => "客先次郎",
            'postal' => "0001111",
            'add' => "東京都〇〇区××０－１",
            'tel' => "0120997777",
            'mobile' => "09012345678",
            'emergency' => "金灸ヒロキ",
            'relation' => "父親"
        ]);
    }
}
