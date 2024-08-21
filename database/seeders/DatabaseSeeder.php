<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // panggil seeder 
        $this->call([UserSeeder::class, CategorySeeder::class]);
        // MENGGUNAKAN FACTORY TINKER
        Post::factory(100)->recycle([
            User::all(),
            Category::all()
        ])->create();
    }
}
