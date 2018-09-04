<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;
use App\Subject;
use App\ExaminationBoard;

class SubjectController extends Controller
{
    public function index()
    {

    }
    public  function newSubjects()
    {
        $board  = ExaminationBoard::orderBy('id')->get();

        //toDo separate subjects based on school level.
        $data= Subject::with('board','schoollevel')->orderBy('name','asc')->get();
        //return $data;
        //Secondary
        return view('subjects.new',compact('data','board'));
    }
    public function manageSubjects()
    {
        return view('subjects.manageSubjects',compact('data'));
    }
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $request->schoolLevel  =1;

        //ToDo  remove hard coded values

        Subject::create([
            'name'=>ucfirst($request->name),
            'subjectCode'=>strtoupper($request->code)?:null,
            'schoolLevel'=>$request->schoolLevel,//fk
            'examinationBoard'=>$request->board?:3,//fk
        ]);
        return redirect()->back()->with('alert','A subject was added');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, 
            [
                'subjectCode'=>'unique:subjects',new LevelErrors
        ]);
    }
    public function show($id)
    {
        $subjectDetails  = Subject::find($id);


        return $subjectDetails;
    }
    public function edit($id)
    {
        return $id."edit method";
    }
    public function update(Request $request, $id)
    {
        $subjectDetails  = Subject::find($id)->update([
                                              'subjectCode'=>$request->code,
                                              'name'=>$request->name,
                                              'examinationBoard'=>$request->board,
                                                      ]);
        return Subject::all();
    }
    public function destroy($id)
    {
        $subjectDetails  =Subject::find($id)->delete();
    }
}
