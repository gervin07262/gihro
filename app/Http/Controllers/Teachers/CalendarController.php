<?php

namespace Gihro\Http\Controllers\Teachers;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Session;
use Gihro\Calendar;

class CalendarController extends Controller
{
     public function initCalendar () {
       return view('panel.teachers.calendar.index');
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */

     public function index()
     {
       $calendar = Calendar::select('id', 'title', 'start', 'end', 'allDay', 'backgroundColor')->get();
       return json_encode($calendar);
     }
}
