<?php

use Illuminate\Database\Seeder;

use App\Role;
class RolesSeederTable extends Seeder
{

    public function run()
    {
        Role::create(['id'=>1,'name'=>'Admin']);
        Role::create(['id'=>2,'name'=>'Staff']);
        Role::create(['id'=>3,'name'=>'Student']);
    }
}
