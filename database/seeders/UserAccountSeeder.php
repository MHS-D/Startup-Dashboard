<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users');

        $user= User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'administrator',
            'password' => Hash::make('password'),
            'email_verified_at'=>now(),
            'active'=>1,
        ]);

        $user->assignRole('superadmin');
    }
}
