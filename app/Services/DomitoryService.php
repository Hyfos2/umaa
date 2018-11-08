<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/20/2018
 * Time: 10:49 AM
 */

namespace App\Services;
use App\studentAccommodationDetail;
use App\domitoryDetail;
use Illuminate\Http\Request;

class DomitoryService
{
    public function newHostel(Request $request)
    {
       return domitoryDetail::create([
            'name'=>$request->name,
            'rooms'=>$request->rooms,
            'students'=>$request->students
        ]);
    }
    public function studentAccommodation()
    {
        return studentAccommodationDetail::with('student','hostel')
            ->orderBy('hostelName','asc')
            ->get();
    }
    public function allocateRoomsToStudents(Request $request)
    {
      return  studentAccommodationDetail::create([
            'studentId'=>$request->student,
            'hostelName'=>$request->hostel,
            'roomNumber'=>$request->room,
            'date'=>$request->date,
            'period'=>$request->period
        ]);
    }
}