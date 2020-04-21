<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Younes",
            "email" => "Pepone@gmail.com",
            "password" => "123",
            "created_at" => now()
        ]);

        DB::table('users')->insert([
            "name" => "Zakaria",
            "email" => "Zakaria@gmail.com",
            "password" => "123",
            "created_at" => now()
        ]);
    }
}
