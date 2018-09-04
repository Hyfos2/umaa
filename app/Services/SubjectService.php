<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/24/2018
 * Time: 12:04 PM
 */

namespace App\Services;


use App\StudentSubject;
use App\Subject;
use App\SchoolLevel;


class SubjectService
{
    protected $studentInfo;
    public  function  __construct(StudentDetailsService $studentDetailsService )
    {
        $this->studentInfo  =$studentDetailsService;
    }
    public  function  primarySubjects()
    {
        $schoolLevel    =$this->studentInfo->getSchoolLevel("Primary");
        return Subject::where('schoolLevel',$schoolLevel->id)->orderBy('name','asc')->get();
    }
    public  function  secondaryZimecSubjects()
    {
        return Subject::where('schoolLevel',$this->studentInfo->getSchoolLevel("Secondary")->id)
                       ->where('examinationBoard',1)
                       ->orderBy('name','asc')
                       ->get();
    }
    public  function  secondaryCambridgeSubjects()
    {
        return Subject::where('schoolLevel',$this->studentInfo->getSchoolLevel("Secondary")->id)
            ->where('examinationBoard',2)
            ->orderBy('name','asc')
            ->get();
    }
    protected  function  examinationBoard($string)
    {
        if(ucfirst($string) == "Zimsec")
        {
            return SchoolLevel::where('name',$string)->first();
        }
        if(ucfirst($string) == "Cambridge")
        {
            $subject = SchoolLevel::where('name',$string)->first();
            return $subject->id;
        }

    }

}