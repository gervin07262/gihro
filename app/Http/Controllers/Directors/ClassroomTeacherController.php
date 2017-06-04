<?php

namespace Gihro\Http\Controllers\Directors;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Classroom;
use Gihro\User;
use Gihro\Teacher;
use Session;

class ClassroomTeacherController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('panel.directors.classroomteacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      $user = User::create([
        'email' => $request->email,
        'password' => '12345',
        'user_type_id' => 2
      ]);
      // insert table teachers
      Teacher::create([
        'classroom_id' => $id,
        'user_id' => $user->id,
        'name' => $request->name,
        'surnames' => $request->surnames,
      ]);
      return redirect('panelDirectors/classrooms/'.$id.'/kids');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $classroomId
     * @param  int  $teacherId
     * @return \Illuminate\Http\Response
     */
    public function show($classroomId,$teacherId)
    {
      
    }
}
