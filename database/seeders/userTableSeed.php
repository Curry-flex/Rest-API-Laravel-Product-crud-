<?php

namespace Database\Seeders;
use  DB;

use Illuminate\Database\Seeder;

class userTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            "role_id"=>'2',
            'name'=>"luka",
            "username"=>"luka",
            "email"=>"luka@gmail.com",
            "password"=>bcrypt("12345678")
        ]);

      
    }
}
