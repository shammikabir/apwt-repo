<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Faceades\DB;
use DB;
use Str;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

            'FirstName'=>str::random(10),
            'LastName'=>str::random(10),
            'Address'=>str::random(10),
            'Course'=>str::random(10),
            'Gender'=>str::random(10),
            'Email'=>str::random(10).'@gmail.com',
            'Password' => Hash::make('Password'),

        ]);
    }
}
