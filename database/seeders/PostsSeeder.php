<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=0; $i < 10; $i++) { 
            DB::table('posts')->insert([
                'usuario_id' => 1,
                'legenda' => 'My Picture '.$i,
                'post' => '/uploads/posts/user_1_'.date('YmdHmi').'.jpg',
            ]);
        }
    }
}
