<?php

namespace App\Http\Controllers;

use App\schoolCalendar;
use App\Services\CalendarService;
use App\Services\UserActivitiyService;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    protected $calendarService,$activityService;

    public function __construct(CalendarService $calendarService,UserActivitiyService $activitiyService)
    {
        $this->calendarService =$calendarService;
        $this->activityService =$activitiyService;
    }

    public function index()
    {
        $events  =$this->calendarService->showSchoolCalenderEvents();
        return  view('newAdmin.calendar.index',compact('events'));
    }

    public function calendarEvents()
    {
        return $this->calendarService->showSchoolCalenderEvents();
    }
    public  function allCalendarEvents()
    {
        return $this->calendarService->allCalendarEvents();
    }

    public function store(Request $request)
    {
        $this->calendarService->newCalendarEvent($request);
        $this->activityService->userActivities("added an event called ".$request->event);
        return redirect()->back()->with('alert','an event was created');
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
    public function deleteEvent($id)
    {
        $eventTitle =schoolCalendar::find($id)->title;
        $this->activityService->userActivities("deleted ".$eventTitle.' event');
        return $this->calendarService->deleteEvent($id);
    }

    public function destroy($id)
    {
        return $id;
    }
}
