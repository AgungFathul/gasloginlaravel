<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            ],
            [
                'name' => 'admin'
            ]
            );

        $role_tim = Role::updateOrCreate(
            [
                'name' => 'tim',
            ],
            [
                'name' => 'tim'
            ]
            );
            
        $role_player = Role::updateOrCreate(
            [
                'name' => 'player',
            ],
            [
                'name' => 'player'
            ]
            );
        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            [
                'name' => 'view_dashboard'
            ]
            );
        
        $role_admin -> givePermissionTo($permission);

        $user = User::find(1);

        $user ->assignRole('admin');
    }
}
