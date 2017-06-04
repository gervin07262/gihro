<?php

namespace Gihro\Http\Controllers\Directors;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Classroom;
use Gihro\User;
use Gihro\Kid;
use Session;

class ClassroomKidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $kids =  Classroom::find($id)->kids;
      $numRows = count($kids);
      return view ('panel.directors.classroomkid.index',['kids' => $kids, 'numRows' => $numRows]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      if ($request->ajax()) {
          $user = User::create([
            'email' => $request->email,
            'password' => '12345',
            'user_type_id' => 3
          ]);
          // insert table teachers
          Kid::create([
            'classroom_id' => $id,
            'user_id' => $user->id,
            'name' => $request->name,
            'surnames' => $request->surnames
          ]);

          return response()->json([
              'msg' => 'Niño Creado correctamente'
          ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $classroomId
     * @param  int  $kidId
     * @return \Illuminate\Http\Response
     */
    public function show($classroomId,$kidId)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $classroomId
     * @param  int  $kidId
     * @return Response
     */
    public function edit($classroomId, $kidId)
    {
      $kid = Kid::find($kidId);
      return response()->json($kid->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $classroomId
     * @param  int  $kidId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $classroomId, $kidId)
    {
      if ($request->ajax()) {
          $kid = Kid::find($kidId);
          $kid->fill($request->all());
          $kid->save();
          return response()->json([
              'msg' => 'Niño Actualizado correctamente'
          ]);
      }

    }
}
