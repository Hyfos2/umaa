<?php

use Illuminate\Database\Seeder;

class PrimaryLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\PrimaryLevel::create(['id'=>1,'name'=>'Grade One']);
       \App\PrimaryLevel::create(['id'=>2,'name'=>'Grade Two']);
       \App\PrimaryLevel::create(['id'=>3,'name'=>'Grade Three']);
       \App\PrimaryLevel::create(['id'=>4,'name'=>'Grade Four']);
       \App\PrimaryLevel::create(['id'=>5,'name'=>'Grade Five']);
       \App\PrimaryLevel::create(['id'=>6,'name'=>'Grade Six']);
       \App\PrimaryLevel::create(['id'=>7,'name'=>'Grade Seven']);
    }
}
