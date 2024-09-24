<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            [
                'name' => 'admin'
            ]
        );
        $role_perbid = Role::updateOrCreate(
            [
                'name' => 'perbid'
            ],
            [
                'name' => 'perbid'
            ]
        );
        $role_karu = Role::updateOrCreate(
            [
                'name' => 'karu'
            ],
            [
                'name' => 'karu'
            ]
        );
        $role_hrd = Role::updateOrCreate(
            [
                'name' => 'hrd'
            ],
            [
                'name' => 'hrd'
            ]
        );
        $role_sekretaris = Role::updateOrCreate(
            [
                'name' => 'sekretaris'
            ],
            [
                'name' => 'sekretaris'
            ]
        );
        // ===========================================

        $permission = Permission::updateOrCreate(
            [
                'name' => 'view_all'
            ],
            ['name' => 'view_all']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_profil'
            ],
            ['name' => 'view_profil']
        );

        $permission3 = Permission::updateOrCreate(
            [
                'name' => 'view_penilaian'
            ],
            ['name' => 'view_penilaian']
        );

        $permission4 = Permission::updateOrCreate(
            [
                'name' => 'view_hrd'
            ],
            ['name' => 'view_hrd']
        );

        $permission5 = Permission::updateOrCreate(
            [
                'name' => 'view_perbid'
            ],
            ['name' => 'view_perbid']
        );

        $permission6 = Permission::updateOrCreate(
            [
                'name' => 'view_sekretaris'
            ],
            ['name' => 'view_sekretaris']
        );
        // ====================================
        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_admin->givePermissionTo($permission3);
        $role_admin->givePermissionTo($permission4);
        $role_admin->givePermissionTo($permission6);

        $role_karu->givePermissionTo($permission);
        $role_karu->givePermissionTo($permission2);
        $role_karu->givePermissionTo($permission3);

        $role_hrd->givePermissionTo($permission);
        $role_hrd->givePermissionTo($permission2);
        $role_hrd->givePermissionTo($permission4);

        $role_perbid->givePermissionTo($permission2);
        $role_perbid->givePermissionTo($permission5);

        $role_sekretaris->givePermissionTo($permission6);
        // ====================================
        $perbidUsers = User::whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 158, 161, 162, 163, 164, 165, 166, 167, 168, 169])->get();
        foreach ($perbidUsers as $perbidUsers) {
            $perbidUsers->assignRole('perbid');
        }

        $adminUsers = User::whereIn('id', [157])->get();
        foreach ($adminUsers as $adminUser) {
            $adminUser->assignRole('admin');
        }

        $karuUsers = User::whereIn('id', [145,146,147,148,149,150,151,152,153,154,155,156, 159])->get();
        foreach ($karuUsers as $karuUser) {
            $karuUser->assignRole('karu');
        }

        $hrdUsers = User::whereIn('id', [144])->get();
        foreach ($hrdUsers as $hrdUser) {
            $hrdUser->assignRole('hrd');
        }
        $sekreUsers = User::whereIn('id', [160])->get();
        foreach ($sekreUsers as $sekreUser) {
            $sekreUser->assignRole('sekretaris');
        }
    }
}
