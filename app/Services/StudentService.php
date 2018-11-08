<?php
/**
 * Created by PhpStorm.
 * User: LoardThomas
 * Date: 25/09/2018
 * Time: 17:38
 */

namespace App\Services;
use App\Rules\PositionRule;
use App\Student;

class StudentService
{
    public  function  getFormOneStudents()
    {
        $students   =[];
        foreach($this->getStudents()as $item)
        {
            if($item->level->id ===1)
            {
                array_push($students,$item);
            }
        }
        return \Response::json(array_unique($students));
    }
    public  function  getFormTwoStudents()
    {
        $students   =[];
        foreach($this->getStudents()as $item)
        {
            if($item->level->id ===2)
            {
                array_push($students,$item);
            }
        }
        return \Response::json(array_unique($students));
    }
    public  function  getFormThreeStudents()
    {
        $students   =[];
        foreach($this->getStudents()as $item)
        {
            if($item->level->id ===3)
            {
                array_push($students,$item);
            }
        }
        return \Response::json(array_unique($students));
    }
    public  function  getFormFourStudents()
    {
        $students   =[];
        foreach($this->getStudents()as $item)
        {
            if($item->level->id ===4)
            {
                array_push($students,$item);
            }
        }
        return \Response::json(array_unique($students));
    }
    public function getStudents()
    {
        return Student::with('user','level')->where('schoolLevel',2)->get();
    }

}