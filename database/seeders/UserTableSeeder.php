<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++)
        {
        $user = new \App\Models\User();
        $user->name = 'user'. $i;
        $user->password = bcrypt('qwerty12345');
        $user->email = 'user' . $i .'@user.com';
        $user->save();
        $user->roles()->attach(1);
        }
    }
}
