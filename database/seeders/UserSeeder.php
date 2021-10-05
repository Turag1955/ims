<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'  => '1',
            'name'     => 'super admin',
            'email'    => 'superadmin@gmail.com',
            'avatar'   => '',
            'mobile'   => '01822010286',
            'gender'   => 'male',
            'password' => 'superadmin@'
        ]);
    }
}
