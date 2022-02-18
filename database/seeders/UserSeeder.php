<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>"slouma",
            'lastname'=>"allagui",
            'email' => "slouma@allagui.com",
            "password"=>Hash::make("28271456")

        ]);
    }
}
