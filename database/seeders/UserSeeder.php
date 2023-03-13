<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Ali Rilwan',
            'email' => 'alirilwan16@gmail.com',
            'password' => Hash::make('1234567890'),
        ]);
        $adminRole =  Role::create(['name' => 'Admin']);
        $adminRole->syncPermissions([Permission::all()]);
        $user->assignRole($adminRole);
        
    }
}
