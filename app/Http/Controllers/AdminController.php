<?php

namespace App\Http\Controllers;

use App\Account;
use App\activityLog;
use App\EntryType;
use App\Level;
use App\Permission;
use App\schoolFees;
use App\SchoolLevel;
use App\Sport;
use App\SubLevel;
use App\userTypes;
use Illuminate\Http\Request;
use App\Subject;
use App\User;
use Carbon\Carbon;
use App\Services\CalendarService;
use App\Services\AdminService;



class AdminController extends Controller
{
    protected $calendarService,$activityService,$adminService;

    public function __construct(CalendarService $calendarService,AdminService $adminService)
    {
        $this->calendarService =$calendarService;
        $this->adminService   =$adminService;
    }
    public function index()
    {
        $latestUsers  =[];
        foreach(User::orderBy('created_at','DESC')->get()  AS $value)
        {
               $diff =  strtotime(Carbon::now("Africa/Harare")) - strtotime($value->created_at);
              // return $diff;
               if($diff  >= 0 && $diff<=86400)
               {
                   array_push($latestUsers,$value);
               }//86400
        }

        $newUsers   =count($latestUsers);
        //$events  =$this->calendarService->showSchoolCalenderEvents();

      //return view('newAdmin.master',compact('events'));

       return view('admin.dashboard');
    }
    public function addTeacher()
    {
        //secondary teacher
        $schoolLevel  =SchoolLevel::where('name','Secondary')->first();
        $subjects      = Subject::with('board')->where('schoolLevel',$schoolLevel->id)->orderBy('name','asc')->get();

        $zimsec  =[];
        $cambridge  =[];
        
        foreach($subjects  as $item)
        {
            if($item->board->name =="Zimsec")
                array_push($zimsec,$item);
            if($item->board->name =="Cambridge")
                array_push($cambridge,$item);
        }
        $classes   = Level::all();
        $userType  = userTypes::where('name','Teacher')->first(['id']);
        $userTypeId =$userType->id;
        return view('newAdmin.addTeacher',compact('zimsec','cambridge','classes','userTypeId'));
    }
    public function addStudents()
    {
        $levels         =Level::all();
        $schoolLevel  =SchoolLevel::where('name','Secondary')->first();
        $subjects      = Subject::with('board')->where('schoolLevel',$schoolLevel->id)->orderBy('name','asc')->get();
        $zimsec  =[];
        $cambridge  =[];
        foreach($subjects  as $item)
        {
            if($item->board->name =="Zimsec")
                array_push($zimsec,$item);
            if($item->board->name =="Cambridge")
                array_push($cambridge,$item);
        }
        $sports         =Sport::orderBy('name','asc')->get();
        $userType       =userTypes::where('name','Student')->first(['id']);
        $userTypeId     =$userType->id;
        $entype         =EntryType::orderBy('name','asc')->get();
        return  view('newAdmin.addStudent',compact('levels','zimsec','cambridge','sports','userTypeId','entype'));
    }
    public function studentLogs()
    {
        $data  = User::where('subUserTypeId',3)->get();
        return view('students.studentLogs',compact('data'));
    }
    public function teacherLogs()
    {
        $teacher   =userTypes::where('name','Teacher')->first();
        $data=     \DB::table('users')
                     ->join('teachers','teachers.userId','=','users.id')
                     ->join('teacher_works','teacher_works.teacherId','=','teachers.id')
                     ->join('school_levels','teachers.schoolLevel','=','school_levels.id')
                     ->join('subjects','teacher_works.subjectId','=','subjects.id')
                     ->join('levels','teacher_works.levelId','=','levels.id')
                     ->where('users.userTypeId',$teacher->id)
                      ->get();
        return view('teachers.teacherLogs',compact('data'));
    }
    public function manageTeachers()
    {
        $userType  =userTypes::where('name','Teacher')->first();
        $data = User::with('teacher')->where('userTypeId',$userType->id)->orderBy('name','asc')->get();
        return view('newAdmin.manageTeachers',compact('data'));
    }
    public function manageStudents()
    {
        $userType  =userTypes::where('name','Student')->first();
        $data = User::where('userTypeId',$userType->id)->orderBy('name','asc')->get();
        return view('newAdmin.manageStudents', compact('data'));
    }
    public function levels()
    {
        $data = SubLevel::all();
        $level =Level::all();
         return view('newAdmin.levels',compact('data','level'));
    }
    public function studentPermission()
    {
        $data  =\App\Permission::all();
        return view('newAdmin.studentPermission',compact('data'));
    }
    public function teacherPermission()
    {
        $data  =\App\Permission::all();
        return view('newAdmin.teacherPermission',compact('data'));
    }
    public function setStdPermission(Request $request)
    {
        //return $request->all();
        //$record   = new \
        $data = $request->permission;

        if($request->userType ==2)
        {
            foreach ($data as $item)
            {
                \DB::table('permission_role')
                    ->insert([
                        'permission_id' =>$item,
                        'role_id'=>2
                    ]);
            }
        }
        else{
            foreach ($data as $item)
            {
                \DB::table('permission_role')
                    ->insert([
                        'permission_id' =>$item,
                        'role_id'=>3
                    ]);
            }
        }


        return back();
    }
    public function setPermission()
    {
        $data  =\App\Permission::all();
        return view('newAdmin.setPermission',compact('data'));
    }
    public function newPermission(Request $request)
    {
        //return $request->all();

        $newName        =str_replace(' ','_',$request->name);
        $record                  = new Permission();
        $record->name            =$newName;
        $record->display_name    =$request->display_name;
        $record->description     =$request->description?:"no description";
        $record->save();

        return back();
    }
    public  function dctvtUser($id){

        $user = User::find($id);
        $updateRecord =User::find($id)->update(['active'=> 0]);
        return redirect()->back()->with('alert',ucfirst($user->name)." ".ucfirst($user->surname)." ".'has been de-activated');
    }
    public function userActivities($id)
    {
        return activityLog::where('userId',$id)->orderBy('created_at','desc')->get();
    }
    public function newUserType(Request $request)
    {
        $this->adminService->newUserType($request);
        return redirect()->back()->with('alert','record was saved');
    }
    public function assignAdminPermission(Request $request)
    {
        return $request;
    }
    public function educationManagement()
    {
        return view('newAdmin.educationManager.index');

    }
    public function communicator()
    {
        return view('newAdmin.communication.index');
    }

     public function schoolStaff()
    {
        
        $admin   = $this->adminService->getAdmin();
        $acc =    $this->adminService->getAccountants();
        $edu=  $this->adminService->getEducationMngr();
        $comm=   $this->adminService->getCommunicator();
   
        return view('admin.schoolStaff',compact('admin','acc','edu','comm'));
    }
}

