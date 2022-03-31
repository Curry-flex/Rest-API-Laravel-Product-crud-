<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('roles')->insert([
         "name"=>"Admin",
         "slug"=>"control all blog"
     ]);

     DB::table('roles')->insert([
        "name"=>"Author",
        "slug"=>"Post creator"
    ]);
    }
}
