<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (!Role::where('name', 'member')->first()) {
            Role::create([
                'name' => 'member',
                'label' => 'Member',
                'permissions' => 'regular',
            ]);
            Role::create([
                'name' => 'admin',
                'label' => 'Admin',
                'permissions' => 'admin,quarx,regular',
            ]);
            Role::create([
                'name' => 'quarx',
                'label' => 'Quarx',
                'permissions' => 'quarx,regular',
            ]);
        }
    }
}
