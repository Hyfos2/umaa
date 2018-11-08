<?php

namespace App\Providers;

use App\Services\TeacherService;
use App\teacher;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
     {
    //     if (\Schema::hasTable('teacher_works'))
    //     {
    //         $teacherData=  \DB::table('teacher_works')
    //             ->join('subjects','teacher_works.subjectId','=','subjects.id')
    //             ->join('levels','teacher_works.levelId','=','levels.id')
    //             ->select(\DB::raw("
    //                              subjects.name as subname,
    //                              subjects.id as subId,
    //                              levels.name as levelname,
    //                              levels.id as levelId,
    //                              teacher_works.id  
    //                             "))
    //             ->where('teacher_works.teacherId','=',TeacherService::getLoggedInTeacherSubjects())
    //             ->get();

    //         \View::share('teacherData',$teacherData);

    //     }
        // if (\Schema::hasTable('student_subjects'))
        // {

        //    // $teacher  = teacher::where('userId',\Auth::user()->id)->first(['id']);

        //     $studentData=  \DB::table('student_subjects')
        //         ->join('subjects','student_subjects.subjectId','=','subjects.id')
        //         ->select(\DB::raw("
        //                          subjects.name as subname,
        //                          student_subjects.id,
        //                          student_subjects.studentId  as studentID
        //                         "))
        //         ->where('student_subjects.studentId','=',TeacherService::getLoggedInTeacherSubjects())
        //         ->get();

        //     \View::share('studentData',$studentData);

        // }
       Schema::defaultStringLength(191);
    }
    public function register()
    {

    }
}
