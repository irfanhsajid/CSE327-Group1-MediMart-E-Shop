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
    * The function inserts two records into the 'users' table in the database, with hardcoded and random
    * values for name and email.
    */
    public function run(): void
    {
        /* The code `DB::table('users')->insert([...])` is inserting a new record into the 'users'
        table in the database. The array passed as the argument contains the values for the columns
        in the table. In this case, it is inserting a record with the following values: */
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
