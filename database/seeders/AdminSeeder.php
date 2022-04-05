<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /**
         * creating admin and assign role.
         */
        User::create([
            'name' => 'admin',
            'email' => 'admin@mailinator.com',
            'password' => Hash::make('12345')
        ])->assignRole('admin');
    }
}
