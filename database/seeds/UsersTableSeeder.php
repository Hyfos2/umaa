<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Brian',
        	'surname'=>'Thomas',
        	'email'=>'bthighforce@gmail.com',
        	'password'=>bcrypt('zimbabwean'),
        	'userTypeId'=>1,
            'gender'=>'male',
            'userName'=>'zimbabwean',
            'imgUrl'=>'download.png'
        	]);
    }
}
