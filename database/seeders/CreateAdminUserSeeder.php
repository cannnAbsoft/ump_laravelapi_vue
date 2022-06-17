<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Thien An',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user2 = User::create([
            'name' => 'Little Man',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        $permissions = Permission::pluck('id','id')->all();
        $permissionOfUser = Permission::where('name','product-list')->pluck('id','id');

        $role->syncPermissions($permissions);
        $role2->syncPermissions($permissionOfUser);

        $user->assignRole([$role->id]);
        $user2->assignRole([$role2->id]);
    }
}
