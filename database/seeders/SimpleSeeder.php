<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class SimpleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->has(
                Post::factory()
                    ->for(User::factory(), 'author')
                    ->has(
                        Comment::factory()
                            ->for(Post::factory(), 'post')
                            ->count(3)
                    )
                    ->count(5)
            )
            ->count(10)
            ->create();
    }
}
