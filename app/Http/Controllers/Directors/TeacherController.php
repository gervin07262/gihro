<?php

namespace Gihro\Http\Controllers\Directors;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Province;

use Gihro\Location;

use Gihro\Director;

use Gihro\Center;

use Gihro\User;

use Gihro\Teacher;

use Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $teachers =  Teacher::all();
      $num_rows = count($teachers);
      return view ('panel.directors.teacher.index',['teachers' => $teachers, 'num_rows' => $num_rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->ajax()) {
          $user = User::create([
            'email' => $request->email,
            'password' => '12345',
            'user_type_id' => 2
          ]);
          // insert table teachers
          Teacher::create([
            'name' => $request->name,
            'surnames' => $request->surnames,
            'user_id' => $user->id
          ]);

          return response()->json([
              'msg' => 'Profesor Creado correctamente'
          ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $teacher = Teacher::find($id);
      return response()->json($teacher->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if ($request->ajax()) {
          $teacher = Teacher::find($id);
          $teacher->fill($request->all());
          $teacher->save();
          return response()->json([
              'msg' => 'Profesor Actualizado correctamente'
          ]);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
