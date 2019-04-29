<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('posts')->insert(
            [
                'title' => \Illuminate\Support\Str::random(255),
                'content' => \Illuminate\Support\Str::random(1000),
            ]
        );
    }
}
