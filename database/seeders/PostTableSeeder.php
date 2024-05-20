<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'partner_id'=> 3,
            'title' => 'Test post 1',
            'content' => 'bla bla bla',
            'price'=> 15
        ]);
        Post::create([
            'partner_id'=> 3,
            'title' => 'Test post 2',
            'content' => 'bla bla bla 2',
            'price'=> 35
        ]);

        Post::create([
            'partner_id'=> 4,
            'title' => 'Test post 3',
            'content' => 'bla bla bla 3',
            'price'=> 55
        ]);
        Post::create([
            'partner_id'=> 4,
            'title' => 'Test post 4',
            'content' => 'bla bla bla 4',
            'price'=> 17
        ]);
    }
}
