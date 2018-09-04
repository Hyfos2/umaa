<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    public function run()
    {
        \App\Subject::create(['id'=>1,
            'name'=>'Maths',
            'examinationBoard'=>'1',
            'schoolLevel'=>'1',
            'created_at'=>'2019-01-12']);
        \App\Subject::create([  'id'=>2,
            'name'=>'Shona',
            'examinationBoard'=>'1',
            'schoolLevel'=>'2',
            'created_at'=>'2013-01-13']);
    }
}
