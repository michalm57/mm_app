<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Models\Roles();
        $role->name = 'Admin';
        $role->save();

        $role = new \App\Models\Roles();
        $role->name = 'Moderator';
        $role->save();


        $role = new \App\Models\Roles();
        $role->name = 'User';
        $role->save();
    }
}
