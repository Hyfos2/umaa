<?php

use App\Staff;
use App\TeacherClass;
//function teacherClasses()
//{
//    if(\Auth::user()->userTypeId ===2)
//    {
//        $staff   =Staff::where('userId',\Auth::user()->id)->first();
//       return TeacherClass::with('level')->where('staffId',$staff->id)->get();
//    }
//    return [];
//}
//
//function teacherSubjects()
//{
//    if(\Auth::user()->userTypeId ===2)
//    {
//        $staff   =Staff::where('userId',\Auth::user()->id)->first();
//        return \App\StaffWork::with('subject','level','staff')->where('staffId',$staff->id)->get();
//    }
//    return [];
//}
//function totalStudentsPerSubject($subjectId)
//{
//    $total =0;
//    if(\Auth::user()->userTypeId ===2)
//    {
//        $staff =Staff::where('userId',\Auth::user()->id)->first();
//        $data  =\App\StaffWork::where('staffId',$staff->id)->get(['subjectId','levelId']);
//        foreach($data as $val)
//        {
//            $studentId  = \App\Student::where('levelId',$val->levelId)->get(['id']);
//            foreach($studentId as $item)
//            {
//                $total +=  \App\StudentSubject::where('studentId',$item->id)->where('subjectId',$subjectId)->where('edited',0)->count();
//            }
//            return $total;
//        }
//    }
//
//}
//
//function studentSubjects()
//{
//    if(\Auth::user()->userTypeId ===3)
//    {
//        $student   =\App\Student::where('userId',\Auth::user()->id)->first();
//       return \App\StudentSubject::with('subject')->where('studentId',$student->id)->get();
//    }
//    return [];
//}

function encryptFormId($value)
{
    if(is_object($value))
    {
        return \Illuminate\Support\Facades\Crypt::encrypt($value->levelId);
    }
    else{
        return \Illuminate\Support\Facades\Crypt::encrypt($value);
    }
}

function encryptSubjectId($value)
{
    if(is_object($value)) {
        return \Illuminate\Support\Facades\Crypt::encrypt($value->subId);
    }
    else{
        return \Illuminate\Support\Facades\Crypt::encrypt($value);
    }

}

