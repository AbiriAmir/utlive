<?php

use Illuminate\Database\Seeder;

class AdminGenerator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(['name' => 'مدیر', 'password' => bcrypt('123456'), 'email' => 'mr.abiri@gmail.com',]);
    }
}
