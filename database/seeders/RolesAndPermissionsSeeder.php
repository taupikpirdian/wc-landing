<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // User Management
            'view users',
            'create users',
            'edit users',
            'delete users',
            'manage users',
            'impersonate users',

            // Role Management
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',
            'manage roles',

            // Content Management
            'view posts',
            'create posts',
            'edit posts',
            'delete posts',
            'publish posts',
            'manage posts',

            // Settings
            'view settings',
            'edit settings',
            'manage settings',

            // System
            'view logs',
            'view analytics',
            'manage system',

            // Dashboard
            'view dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles and assign permissions
        $roles = [
            'super_admin' => [
                'description' => 'Full system access with all permissions',
                'permissions' => '*', // All permissions
            ],
            'admin' => [
                'description' => 'Administrative access to user and content management',
                'permissions' => [
                    'view users', 'create users', 'edit users', 'delete users', 'manage users',
                    'view roles', 'create roles', 'edit roles',
                    'view posts', 'create posts', 'edit posts', 'delete posts', 'publish posts', 'manage posts',
                    'view settings', 'edit settings',
                    'view dashboard', 'view analytics',
                ],
            ],
            'moderator' => [
                'description' => 'Content moderation and basic user management',
                'permissions' => [
                    'view users', 'edit users',
                    'view posts', 'create posts', 'edit posts', 'delete posts', 'publish posts',
                    'view dashboard',
                ],
            ],
            'editor' => [
                'description' => 'Content creation and editing',
                'permissions' => [
                    'view posts', 'create posts', 'edit posts', 'publish posts',
                    'view dashboard',
                ],
            ],
            'user' => [
                'description' => 'Basic user access',
                'permissions' => [
                    'view dashboard',
                ],
            ],
        ];

        foreach ($roles as $roleName => $roleData) {
            $role = Role::firstOrCreate(['name' => $roleName]);

            if ($roleData['permissions'] === '*') {
                $role->givePermissionTo(Permission::all());
            } else {
                $role->givePermissionTo($roleData['permissions']);
            }
        }

        // Create default users
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => 'password',
                'phone' => '+62 812-3456-7890',
                'address' => 'Jakarta, Indonesia',
                'roles' => ['super_admin'],
                'is_active' => true,
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'password',
                'phone' => '+62 812-3456-7891',
                'address' => 'Bandung, Indonesia',
                'roles' => ['admin'],
                'is_active' => true,
            ],
            [
                'name' => 'Moderator',
                'email' => 'moderator@example.com',
                'password' => 'password',
                'phone' => '+62 812-3456-7892',
                'address' => 'Surabaya, Indonesia',
                'roles' => ['moderator'],
                'is_active' => true,
            ],
            [
                'name' => 'Editor',
                'email' => 'editor@example.com',
                'password' => 'password',
                'phone' => '+62 812-3456-7893',
                'address' => 'Yogyakarta, Indonesia',
                'roles' => ['editor'],
                'is_active' => true,
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => 'password',
                'phone' => '+62 812-3456-7894',
                'address' => 'Semarang, Indonesia',
                'roles' => ['user'],
                'is_active' => true,
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => Hash::make($userData['password']),
                    'phone' => $userData['phone'],
                    'address' => $userData['address'],
                    'is_active' => $userData['is_active'],
                    'email_verified_at' => now(),
                ]
            );

            $user->syncRoles($userData['roles']);
        }

        $this->command->info('✅ Roles and permissions seeded successfully!');
        $this->command->info('👤 Default users created:');
        foreach ($users as $userData) {
            $this->command->info("   • {$userData['email']} (Password: {$userData['password']}) - Roles: " . implode(', ', $userData['roles']));
        }
    }
}