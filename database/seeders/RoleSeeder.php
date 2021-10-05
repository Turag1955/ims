<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Role::insert([
           ['role_name'=>'super admin','deletable'=>false],
           ['role_name'=>'admin','deletable'=>false]
       ]);
    }
}
