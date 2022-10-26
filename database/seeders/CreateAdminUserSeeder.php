<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$user = User::create([
            'username' => 'admin_test',
            'phone' => '12121',
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'email@esprit.tn',
            'password' => bcrypt('123456')
        ]);*/
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'user']);
        $permissions = Permission::pluck('id', 'id')->all();
        $roleAdmin->syncPermissions($permissions);
        $roleUser->syncPermissions($permissions);
        // $user->assignRole([$roleAdmin->id]);
    }
}
