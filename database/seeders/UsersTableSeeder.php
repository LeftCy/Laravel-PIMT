<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'テストユーザー',
            'number' => '12345',
            'date' => '2020-01-01',
            'dep' => 'ソフトウェア事業部',
            'group' => '〇〇サテライトGr',
            'customer' => '客先タロウ',
            'postal' => '0001234',
            'add' => '東京都〇〇区０－１',
            'tel' => '0120994444',
            'mobile' => '08077776666',
            'emergency' => '緊急ハナコ',
            'relation' => '母',
        ]);

        DB::table('users')->insert([
            'name' => "個人太郎",
            'number' => "00001",
            'date' => "2020/12/1",
            'dep' => "株式会社〇〇△△事業部",
            'group' => "××Gr,",
            'customer' => "客先次郎",
            'postal' => "0001111",
            'add' => "東京都〇〇区××０－１",
            'tel' => "0120997777",
            'mobile' => "09012345678",
            'emergency' => "緊急ヒロキ",
            'relation' => "父親"
        ]);

        for ($count = 1; $count <= 28; $count ++) {
            //
        }
    }
}
