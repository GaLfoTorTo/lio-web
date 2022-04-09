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
        for ($i=1; $i <= 50; $i++) { 
            DB::table('posts')->insert([
                'usuario_id' => 1,
                'legenda' => 'My Picture '.$i,
                'post' => '/uploads/posts/first_img.jpg',
                'created_at'=> date('YmdHis'),
                'updated_at'=> date('YmdHis')
            ]);
        }
    }
}
