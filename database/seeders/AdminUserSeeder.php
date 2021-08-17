<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin System',
            'email' => 'upst.cyber@gmail.com',
            'username' => 'adminsystem',
            'password' => bcrypt('AdminUpst123$')
        ]);

        $role = Role::findOrFail(1);

        $user->assignRole([$role->id]);
    }
}
