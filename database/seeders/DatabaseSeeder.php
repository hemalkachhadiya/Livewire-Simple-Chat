<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        for($i = 0;$i < 10;$i++){

        Post::create([
            'title' => 'Test'.$i.' Post',
            'content'=>'test'.$i.'@example.com',
            'image' => 'uploads/test'.$i.'.jpg',
        ]);
    }
    }
}
