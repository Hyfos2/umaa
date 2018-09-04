<?php

namespace App\Http\Controllers;

use App\Services\StudentDetailsService;
use App\Services\TeacherService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected  $studentInfo,$teacherInfo;
    public  function __construct(StudentDetailsService $studentDetailsService,TeacherService $teacherService)
    {
        $this->studentInfo  =$studentDetailsService;
        $this->teacherInfo  =$teacherService;
    }

    public function index()
    {
        return view('auth.loginTwo');
    }
    public function welcome()
    {
        return view('internal.users.home');
    }
}
