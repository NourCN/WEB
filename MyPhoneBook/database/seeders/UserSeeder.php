<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'id' => 1,
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@a.a',
            'password' =>Hash::make('admin')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'gestionnaire',
            'role' => 'gestionnaire',
            'email' => 'gestionnaire@g.g',
            'password' => Hash::make('gestionnaire')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'user',
            'role' => 'user',
            'email' => 'user@u.u',
            'password' => Hash::make('user')
        ]);
    }
}
