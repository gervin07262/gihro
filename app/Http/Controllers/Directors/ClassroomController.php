<?php

namespace Gihro\Http\Controllers\Directors;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Classroom;

use Gihro\AgeRange;

use Session;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $classrooms =  Classroom::all();
      $numRows = count($classrooms);
      return view ('panel.directors.classroom.index',['classrooms' => $classrooms,
      'numRows' => $numRows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ageRanges = AgeRange::pluck('name', 'id')->all();
        return view ('panel.directors.classroom.create', ['ageRanges' => $ageRanges] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $classroom = Classroom::create($request->all());
      return redirect('panelDirectors/classrooms/'.$classroom->id.'/teachers/create');
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
