<?php

namespace Gihro\Http\Controllers;

use Illuminate\Http\Request;

use Gihro\Location;

class ProvinceController extends Controller
{
    public function getLocations(Request $request,$id) {
        if ($request->ajax()) {
            $locations = Location::getLocations($id);
            return response()->json($locations);
        }
    }
}
