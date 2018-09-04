<?php

use Illuminate\Database\Seeder;
use App\SchoolLevel;

class SchoolLevelsTableSeeder extends Seeder
{
    public function run()
    {
        SchoolLevel::create(['id'=>1,'name'=>'Primary']);
        SchoolLevel::create(['id'=>2,'name'=>'Secondary']);
//        SchoolLevel::create(['id'=>3,'name'=>'Student']);
    }
}
