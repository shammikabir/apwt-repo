<?php

namespace Database\Seeders;
use DB;
use Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([

            't_FirstName'=>str::random(10),
            't_LastName'=>str::random(10),
            't_Address'=>str::random(10),
            't_Gender'=>str::random(10),
            't_Email'=>str::random(10).'@gmail.com',
            't_Password' => Hash::make('Password'),

        ]);
    }
}
