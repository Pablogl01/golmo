<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('role', 'user')->first();
        $role_admin = Role::where('role', 'admin')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->role_id = 2;
        $user->password = bcrypt('secret');
        $user->direccion = "mi casa";
        $user->gender = 1;
        $user->phone_number = 633999999;
        $user->birthdate = '2001-11-04';
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->role_id = 1;
        $user->password = bcrypt('secret');
        $user->direccion = "mi casa";
        $user->gender = 1;
        $user->phone_number = 633998999;
        $user->birthdate = '2001-11-04';
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
