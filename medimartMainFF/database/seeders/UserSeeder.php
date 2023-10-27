<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds to insert values.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ahmad Abeer',
            'email' => 'ab@gmail.com',
            'password' => Hash::make('123456qwer'),
            'confirm_password' => Hash::make('123456qwer'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123456qwer'),
            'confirm_password' => Hash::make('123456qwer'),
        ]);
    }
}
