<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 7/6/2018
 * Time: 2:02 PM
 */

namespace App\Services;


class StudentsPerSubject
{
    public function allStudents($id,$sub)
    {
        return \DB::table('students')
            ->join('users','students.userId','=','users.id')
            ->join('levels','levels.id','=','students.levelId')
            ->join('sub_levels','sub_levels.id','=','students.subLevelId')
            ->join('student_subjects','students.id','=','student_subjects.studentId')
            ->join('subjects','subjects.id','=','student_subjects.subjectId')
            ->select(\DB::raw("
                     users.name   as username,
                     users.surname   as surname,
                     users.email  as useremail,
                     subjects.name as subname,
                     levels.name as levname,
                     subjects.id as subId,
                     users.gender,
                     students.address,
                     students.userId as stdntId

                     "))
            ->where('students.levelId',$id)
            ->where('student_subjects.subjectId',$sub)
            ->where('student_subjects.edited',0)
            ->get();

    }
    public function studentAttendances($studentId)
    {
       return \DB::table('student_attendances')
            ->join('subjects','student_attendances.subjectId','=','subjects.id')
            ->join('teachers','student_attendances.teacherId','=','teachers.id')
            ->join('users','teachers.userId','=','users.id')
            ->where('student_attendances.studentId','=',$studentId)
            ->get();
    }
    public  function studentAccount($studentId)
    {
        return \DB::table('accounts')
        ->where('accounts.studentId','=',$studentId)
        ->get();
    }
    public  function studentTransaction($studentId)
    {
        return \DB::table('student_transactions')
            ->where('student_transactions.studentId','=',$studentId)
            ->get();
    }
    public  function studentDailyExercise($studentId)
    {
        return \DB::table('student_daily_exercise_marks')
            ->join('teachers','student_daily_exercise_marks.teacherId','=','teachers.id')
            ->join('users','teachers.userId','=','users.id')
            ->where('student_daily_exercise_marks.studentId','=',$studentId)
            ->get();
    }
    public  function studentSubjects($studentId)
    {
        return \DB::table('student_subjects')
            ->join('subjects','student_subjects.subjectId','=','subjects.id')
            ->join('examination_boards','subjects.examinationBoard','=','examination_boards.id')
            ->select(\DB::raw("subjects.subjectCode,
                               subjects.name as subject,
                               examination_boards.name as board"))
            ->where('student_subjects.studentId','=',$studentId)
            ->get();
    }
}