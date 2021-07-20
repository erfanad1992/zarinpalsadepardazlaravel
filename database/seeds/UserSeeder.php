<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'erfan',
            'email' => 'erfanad1371@gmail.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
