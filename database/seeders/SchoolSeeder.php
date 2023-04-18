<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert(['name' =>'Villiers High School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Dormers Wells High School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Acton High School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'The Cardinal Wiseman Catholic School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Brentside High School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Greenford High School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'The Ellen Wilkinson School for Girls','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Northolt High School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Winchmore School','category' =>'High School',]);
        DB::table('schools')->insert(['name' =>'Enfield County School','category' =>'High School,',]);
        DB::table('schools')->insert(['name' =>'Chace Community School','category' =>'High School',]);

    }
}
