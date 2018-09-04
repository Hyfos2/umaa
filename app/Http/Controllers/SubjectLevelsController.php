<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectLevel;

class SubjectLevelsController extends Controller
{
   
    public function index()
    {
        
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
         // to implement validation  rules.
        
        $subjectLevels               = new SubjectLevel();
        $subjectLevels->subjectId    = $request->subjectId;
        $subjectLevels->levelId      = $request->levelId;
        $subjectLevels->save();

       return $subjectLevels;
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
