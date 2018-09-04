<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectMark;

class SubjectMarksController extends Controller
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

        // to implement validation  rules.
        
        $subjectMark               = new SubjectMark();
        $subjectMark->studentId    = $request->studentId;
        $subjectMark->subjectId    = $request->subjectId;
        $subjectMark->comment      = $request->comment;
        $subjectMark->mark         = $request->mark;
        $subjectMark->save();

       return $subjectMark;
    }

    
    public function show($id)
    {
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
