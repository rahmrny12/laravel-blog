<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rahmat Rendy',
            'username' => 'rahmrny12',
            'email' => 'rahmatprayogo12@gmail.com',
            'password' => bcrypt('ruwet123'),
            'is_admin' => 1
        ]);
        
        User::create([
            'name' => 'Hamzah Andy',
            'username' => 'hamzahhaz',
            'email' => 'hamzahhamah066@gmail.com',
            'password' => bcrypt('ruwet123'),
            'is_admin' => 0
        ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Category::create([
            'name' => 'Travelling',
            'slug' => 'travelling'
        ]);

        Post::factory(15)->create();
    }
}
