<?php

use Illuminate\Database\Seeder;

class subUserTypeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\subUserType::create(['id'=>1,'name'=>'Admin']);
        \App\subUserType::create(['id'=>2,'name'=>'Staff']);
        \App\subUserType::create(['id'=>3,'name'=>'Student']);
//        \App\subUserType::create(['id'=>4,'name'=>'Form Four']);
    }
}
