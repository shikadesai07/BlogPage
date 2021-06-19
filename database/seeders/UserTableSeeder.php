<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "firstname" => "Sherwin",
            "lastname" => "Fernandes",
            "username" => "sherwin1201",
            "password" => bcrypt("password"),
            "role" => "ADMIN",
        ]);
    }
}
