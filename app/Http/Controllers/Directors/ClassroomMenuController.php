<?php

namespace Gihro\Http\Controllers\Directors;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Classroom;
use Gihro\Menu;
use Session;

class ClassroomMenuController extends Controller
{

    public function menusList () {
      return view('panel.directors.classroommenu.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

      $data = array(); //declaramos un array principal que va contener los datos
      $classroom = Classroom::find($id);
      $menus = $classroom->menus()->get();
      return json_encode($menus);
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
          Menu::create([
            'classroom_id' => $id,
            'title' => $request->title,
            'date' => $request->date
          ]);
      }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $classroomId
     * @param  int  $MenuId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $classroomId, $MenuId)
    {
      if ($request->ajax()) {
          $menu = Menu::find($MenuId);
          $menu->fill($request->all());
          $menu->save();
          return response()->json([
              'msg' => 'Menu Actualizado correctamente'
          ]);
      }

    }

    /**
     * destroy the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $classroomId
     * @param  int  $MenuId
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request,$classroomId, $MenuId){
        if ($request->ajax())
          Menu::destroy($MenuId);
    }
}
