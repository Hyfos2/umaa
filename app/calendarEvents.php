<?php

use App\schoolCalendar;

function getCalendarEvents()
{
    return schoolCalendar::all();
}