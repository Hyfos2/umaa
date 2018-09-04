<?php

use Illuminate\Database\Seeder;
use App\EntryType;

class EntryTypeTableSeeder extends Seeder
{
    public function run()
    {
        EntryType::create(['id'=>1,'name'=>'Boarder']);
        EntryType::create(['id'=>2,'name'=>'Day-Scholar']);
    }
}
