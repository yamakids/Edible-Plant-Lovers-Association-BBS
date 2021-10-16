<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
           'name' => 'tester',
           'email' => 'tester@example.com',
           'password' => bcrypt('tester'),
           'email_verified_at' => '2021-10-15 00:00:00',
           'created_at' => '2020-10-15 00:00:00'
       ]);
    }
}
