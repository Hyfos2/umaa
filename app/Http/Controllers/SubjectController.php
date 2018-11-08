<?php

namespace App\Http\Controllers;

use App\Services\SubjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;
use App\Subject;
use App\ExaminationBoard;
use App\Level;

class SubjectController extends Controller
{

    protected $subject ;
    public function __construct(SubjectService $subjectService)
    {
        $this->subject    =$subjectService;
    }

    public function index()
    {
        $levels= Level::orderBy('id','asc')->get();
        return view('newAdmin.subjects.index',compact('levels'));
    }
    public  function newSubjects()
    {
        $board  = ExaminationBoard::orderBy('id')->get();

        //toDo separate subjects based on school level.
        $data= Subject::with('board','schoollevel')->orderBy('name','asc')->get();
      
        //return $data;
        //Secondary
        return view('subjects.new',compact('data','board','levels'));
    }
    public function manageSubjects()
    {
        return view('subjects.manageSubjects',compact('data'));
    }
    public function store(Request $request)
    {

    //$this->validator($request->all())->validate();
    //ToDo use service instead
    //ToDo  remove hard coded values

        Subject::create([
            'name'=>ucfirst($request->name),
            'subjectCode'=>strtoupper($request->code)?:null,
            'schoolLevel'=>2,//fk
            'levelId'=>$request->level,
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
    public function getZimsecSubjects()
    {

        return $this->subject->getZimsecSubjects();
    }
    public function getCambridgeSubjects()
    {
        return $this->subject->getCambridgeSubjects();
    }
}
