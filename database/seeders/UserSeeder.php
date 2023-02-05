<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Hoge1',
                'email' => 'hoge1@hoge.com',
                'password' => Hash::make('hogehoge')
            ],
            [
                'name' => 'Hoge2',
                'email' => 'hoge2@hoge.com',
                'password' => Hash::make('hogehoge')
            ],
        ]);
    }
}
