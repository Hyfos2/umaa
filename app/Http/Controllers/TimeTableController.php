<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeTable;
use App\User;
use App\teacher;
use App\Subject;

class TimeTableController extends Controller
{
  
    public function index()
    {
       
    }

    public function subjects($id)
    {
        return Subject::where('levelId',$id)->get();
    }
    public function teachers($id)
    {

     $teachers =\DB::table('teacher_works')
        ->join('teachers','teacher_works.teacherId','=','teachers.id')
        ->join('users','teachers.userId','=','users.id')
        ->select(\DB::raw("users.name, users.surname"))
        ->where('teacher_works.levelId',$id)
        ->get();

        $data = array();
        if(count($teachers) > 0)
        {
           foreach($teachers as $teacher){
            $data[]=array("name"=>"{$teacher->name} {$teacher->surname}");
           }
       }
       return $data;
    }
    public function store(Request $request)
    {
       //return $request->all();
        $subjectId =Subject::where('levelId',$request->level)->where('name',$request->subjectId)->first()->id;
        $arr       = explode(' ',trim($request->teacherId));
        $userId    =User::where('name', $arr[0])->where('surname',$arr[1])->first()->id;
        $teacherId =teacher::where('userId',$userId)->first()->id;


       TimeTable::create([
        'levelId'=>$request->level,
        'subLevelId'=>$request->sublevel,
        'subjectId'=>$subjectId,
        'teacherId'=>$teacherId,
        'day'=>ucfirst($request->weekday),
        'color'=>$request->color,
        'startTime'=>$request->start_time,
        'endTime'=>$request->end_time
       ]);

         return redirect()->back()->with('alert','time table was saved');

    }
}
