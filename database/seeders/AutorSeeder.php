<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nickname' => 'beastnikolov',
            'email' => 'mariorumenovnikolov@gmail.com',
            'name' => 'Mario Nikolov',
            'canPublish' => 1,
            'password' => bcrypt('admin')
        ]);

        DB::table('users')->insert([
            'nickname' => 'miusuario',
            'email' => 'miusuario@gmail.com',
            'name' => 'Mi Usuario',
            'canPublish' => 0,
            'password' => bcrypt('123')
        ]);
    }
}
