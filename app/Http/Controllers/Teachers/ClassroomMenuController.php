<?php

namespace Gihro\Http\Controllers\Teachers;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Classroom;
use Gihro\Menu;
use Session;

class ClassroomMenuController extends Controller
{

  public function menusList () {
    return view('panel.teachers.classroommenu.index');
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
}
