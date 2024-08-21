<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'UI Programming',
            'slug' => 'ui-programming',
            'color' => 'violet'
        ]);
        Category::create([
            'name' => 'UI UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'blue'
        ]);
    }
}
