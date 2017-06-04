<?php

namespace Gihro\Http\Controllers\Directors;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Session;
use Gihro\Calendar;

class CalendarController extends Controller
{

     public function initCalendar () {
       return view('panel.directors.calendar.index');
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

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

     public function store(Request $request)
     {
       $allDay= ($request->allDay == "true") ? 1 : 0;
       Calendar::create([
         'center_id' => session('center_id'),
         'title' => $request->title,
         'start' => $request->start,
         'allDay' => $allDay,
         'backgroundColor' => $request->backgroundColor
       ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */

      public function update(Request $request, $id){
        if ($request->ajax()) {
            $calendar = Calendar::find($id);
            $end = ($request->end =='NULL') ? NULL : $request->end;
            $allDay = ($request->allDay == "true") ? 1 : 0;

            $calendar->fill([
              'title' => $request->title,
              'start' => $request->start,
              'end' => $end,
              'allDay' => $allDay,
              'backgroundColor' => $request->backgroundColor
            ]);
            $calendar->save();
            return response()->json([
                'msg' => 'Calendario Actualizado correctamente'
            ]);
        }
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */

      public function destroy($id) {
           Calendar::destroy($id);
      }
}
