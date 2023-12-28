<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'      => 'owner',
                'username'  => 'owner',
                'password'  => bcrypt('owner'),
                'role'      => 'owner',
            ]
        );

        User::create(
            [
                'name'      => 'admin',
                'username'  => 'admin',
                'password'  => bcrypt('admin'),
                'role'      => 'admin',
            ]
        );
    }
}
