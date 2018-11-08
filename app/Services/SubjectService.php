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
use App\AssignedSubject;


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
        // return Subject::where('schoolLevel',$this->studentInfo->getSchoolLevel("Secondary")->id)
        //                ->where('examinationBoard',1)
        //                ->orderBy('name','asc')
        //                ->get();

        $data  =[];
        foreach($this->unassignedSubjects()  as $item)
        {
            if($item->examinationBoard ===1)
            {
                array_push($data,$item);
            }
        }
          return $data;

    }
    public  function  secondaryCambridgeSubjects()
    {

        $data  =[];
        foreach($this->unassignedSubjects()  as $item)
        {
            if($item->examinationBoard ===2)
            {
                array_push($data,$item);
            }
        }
        return $data;

        // return Subject::where('schoolLevel',$this->studentInfo->getSchoolLevel("Secondary")->id)
        //     ->where('examinationBoard',2)
        //     ->orderBy('name','asc')
        //     ->get();
    }

    public  function  allSubjects()
    {
        return Subject::where('schoolLevel',$this->studentInfo->getSchoolLevel("Secondary")->id)
            ->orderBy('id','asc')
            ->get();
    }

    public function unassignedSubjects()
    {
        $assignedSubjects   =AssignedSubject::orderBy('id','asc')->get(['subjectId','levelId']);

        $unassignedSubjects   =[];

        foreach($this->allSubjects() as $subject)
        {
            foreach($assignedSubjects as $assignedSubject)
            {
                if($subject->id !== $assignedSubject->subjectId &&  $subject->levelId !== $assignedSubject->levelId)
                    {
                            array_push($unassignedSubjects,$subject);
                    }
            }
        }
        return array_unique($unassignedSubjects);
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
    public  function  getZimsecSubjects()
    {
        return \Response::json(Subject::where('examinationBoard',1)->where('schoolLevel',2)->orderBy('name')->get());
    }
    public  function  getCambridgeSubjects()
    {
        return \Response::json(Subject::where('examinationBoard',2)->where('schoolLevel',2)->orderBy('name')->get());
    }
}