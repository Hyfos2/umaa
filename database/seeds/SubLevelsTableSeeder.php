<?php

use Illuminate\Database\Seeder;
use App\SubLevel;

class SubLevelsTableSeeder extends Seeder
{
    public function run()
    {
        SubLevel::create(['id'=>1, 'levelId'=>1,'name'=>'1A']);

        SubLevel::create(['id'=>2, 'levelId'=>1,'name'=>'1B']);

        SubLevel::create(['id'=>3, 'levelId'=>2,'name'=>'2A']);

        SubLevel::create(['id'=>4, 'levelId'=>2,'name'=>'2B']);

        SubLevel::create(['id'=>5, 'levelId'=>3,'name'=>'3A']);

        SubLevel::create(['id'=>6, 'levelId'=>3,'name'=>'3B']);

    }
}
