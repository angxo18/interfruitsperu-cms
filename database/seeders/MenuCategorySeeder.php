<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_categories')->insert([
            'name' => 'Menú',
            'slug' => 'menu',
            'order' => 1,
            'visible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
