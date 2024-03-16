<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\UserSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users') ->insert([
        //     'name'=>'Nguyen The Truong',
        //     'email' => 'truong1@gmail.com',
        //     'password'=> Hash::make('password')
        // ]);
        $this->call([
            UserSeeder::class,
        ]);
    }
}
