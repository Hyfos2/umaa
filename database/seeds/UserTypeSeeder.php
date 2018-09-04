<?php

use Illuminate\Database\Seeder;
use App\userTypes;

class UserTypeSeeder extends Seeder
{
    public function run()
    {
        userTypes::create(['id'=>1,'name'=>'Admin']);
        userTypes::create(['id'=>2,'name'=>'Teacher']);
        userTypes::create(['id'=>3,'name'=>'Student']);
    }
}
