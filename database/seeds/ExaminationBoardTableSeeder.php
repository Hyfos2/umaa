<?php

use Illuminate\Database\Seeder;
use  App\ExaminationBoard;

class ExaminationBoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExaminationBoard::create(['id'=>1,'name'=>'Zimsec']);
        ExaminationBoard::create(['id'=>2,'name'=>'Cambridge']);
    }
}
