<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentSubject;
use Illuminate\Support\Facades\Validator;
use App\Rules\StdSubject;

class StudentSubjectsController extends Controller
{
  
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //$this->checkTheDB($request->all());
       // $this->validator($request->all())->validate();
        //to validate so no duplicate records can be stored.

        $stSubject               = new StudentSubject();
        $stSubject->studentId    = $request->studentId;
        $stSubject->subjectId    = $request->subjectId;
        $stSubject->save();

       return $stSubject;
    }

     protected function checkTheDB(array $data)
    {
        print_r($data);
    }

    protected function validator(array $data)
    {
    
        return Validator::make($data, 
            [
                 'studentId'=>'unique:student_subjects',
                 'subjectId'=>'unique:student_subjects'
        ]);
    }
   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
