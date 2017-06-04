<?php

namespace Gihro\Http\Controllers\Teachers;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Province;

use Gihro\Location;

use Gihro\Kid;

use Gihro\Center;

use Gihro\User;

use Session;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kids =  Kid::findBy('classroom_id', session('classroom_id'));
      $num_rows = count($kids);
      return view ('panel.teachers.kid.index',['kids' => $kids, 'num_rows' => $num_rows]);
    }
    
}
