<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('posts')->insert([
                'autor' => 'beastnikolov',
                'content' => 'This is a test post',
                'postDate' => date('Y-m-d h:i:s', time()),
            ]);
        }
    }
}
