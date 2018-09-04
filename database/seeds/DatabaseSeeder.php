<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    
    public function run()
    {

        $this->call(UserTypeSeeder::class);
        $this->call(SchoolLevelsTableSeeder::class);
//      $this->call(subUserTypeSeederTable::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(SubLevelsTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(ExaminationBoardTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(RolesSeederTable::class);
        $this->call(EntryTypeTableSeeder::class);
        $this->call(PrimaryLevelTableSeeder::class);

    }
}
