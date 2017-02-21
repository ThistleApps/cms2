<?php

use Illuminate\Database\Seeder;
use Yab\Quarx\Models\Link;
use Yab\Quarx\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $menu = Menu::create([
            'name' => 'main',
            'slug' => 'main',
        ]);

        Link::create([
            'menu_id' => $menu->id,
            'name' => 'Welcome Page',
            'external' => false,
            'external_url' => null,
            'page_id' => 1,
        ]);
    }
}
