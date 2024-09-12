<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('mdpadmin'),
            'age' => 20,
            'height' => 182.5,
            'weight' => 75.4,
            'planet' => 'Zarkona Prime',
            'language' => 'Oolbian',
            'avatar_path' => 'img/avatar/par_default.png'
        ]);
        
        User::factory(20)->create();

        Post::factory()->create([
            'title' => 'Général',
            'body' => 'Vous pouvez échangez dans les commentaires de ce fil de conversation général',
            'user_id' => 1
        ]);
    }
}
