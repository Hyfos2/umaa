<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{

    public function run()
    {
        Level::create(['id'=>1,'name'=>'Form One']);
        Level::create(['id'=>2,'name'=>'Form Two']);
        Level::create(['id'=>3,'name'=>'Form Three']);
        Level::create(['id'=>4,'name'=>'Form Four']);
    }
}
