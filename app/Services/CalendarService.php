<?php

namespace App\Services;


use App\schoolCalendar;
use Illuminate\Database\Eloquent\MassAssignmentException;

class CalendarService
{
    public function newCalendarEvent($request)
    {
        try{
            $calendarEvent              =new schoolCalendar();
            $calendarEvent->title       =$request->title;
            $calendarEvent->start   =date('Y-m-d',strtotime($request->start));
            $calendarEvent->end     =date('Y-m-d',strtotime($request->end));
            $calendarEvent->description =$request->description;
            $calendarEvent->className =$request->color;
            $calendarEvent->save();
        }
        catch(MassAssignmentException $e)
        {
            \Log::info("there is an error");
        }

    }
    public function showSchoolCalenderEvents()
    {
       return schoolCalendar::orderBy('created_at','desc')->take(5)->get();
    }
    public  function allCalendarEvents()
    {
        $events =schoolCalendar::all();
        return json_encode($events);
    }
    public function deleteEvent($id)
    {
         schoolCalendar::find($id)->delete();
         return schoolCalendar::all();

    }
}