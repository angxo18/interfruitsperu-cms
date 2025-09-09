<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $principaMenuCategoy = MenuCategory::where('slug', 'menu')->first();

        DB::table('menus')->insert([
            'title' => 'Dashboard',
            'icon' => 'layout-dashboard',
            'route_name' => 'admin.dashboard',
            'order' => 1,
            'visible' => true,
            'parent_id' => null,
            'menu_category_id' => $principaMenuCategoy->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            [
                'title' => 'Productos',
                'icon' => 'box',
                'route_name' => 'admin.products.index',
                'order' => 2,
                'visible' => true,
                'parent_id' => null,
                'menu_category_id' => $principaMenuCategoy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicios',
                'icon' => 'concierge-bell',
                'route_name' => 'admin.services.index',
                'order' => 3,
                'visible' => true,
                'parent_id' => null,
                'menu_category_id' => $principaMenuCategoy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Usuarios',
                'icon' => 'users',
                'route_name' => 'admin.users.index',
                'order' => 4,
                'visible' => true,
                'parent_id' => null,
                'menu_category_id' => $principaMenuCategoy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $segurityMenuId = DB::table('menus')->insertGetId(
            [
                'title' => 'Seguridad',
                'icon' => 'shield',
                'route_name' => null,
                'order' => 5,
                'visible' => true,
                'parent_id' => null,
                'menu_category_id' => $principaMenuCategoy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('menus')->insert([
            [
                'title' => 'Permisos',
                'icon' => 'file-key',
                'route_name' => 'admin.permissions.index',
                'order' => 1,
                'visible' => true,
                'parent_id' => $segurityMenuId,
                'menu_category_id' => $principaMenuCategoy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Roles',
                'icon' => 'square-user',
                'route_name' => 'admin.roles.index',
                'order' => 2,
                'visible' => true,
                'parent_id' => $segurityMenuId,
                'menu_category_id' => $principaMenuCategoy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
