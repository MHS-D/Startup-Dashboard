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

        $user= User::create([
            'name' => 'admin',
            'email' => env('DEFUALT_ADMIN_EMAIL'),
            'username' => 'administrator',
            'password' => Hash::make(env('DEFUALT_ADMIN_PASSWORD')),
            'email_verified_at'=>now(),
            'active'=>1,
        ]);

        $user->assignRole(config('settings.roles.names.adminRole'));
    }
}
