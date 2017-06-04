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

use Session;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = Director::profile($id);

        $provinces = Province::pluck('province', 'id')->all();
        $profile[0]->province_id = ($profile[0]->province_id) ? $profile[0]->province_id : 28;
        $profile[0]->location_id = ($profile[0]->location_id) ? $profile[0]->location_id : 4365;
        $locations = Location::where('province_id','=',$profile[0]->province_id)->pluck('location', 'id')->all();

        return view('panel.directors.profile.edit',
                ['profile' => $profile[0],
                'provinces' => $provinces,
                'locations' => $locations
               ]);
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
        //
        // update table directors
        $director = Director::find($id);
        $this->deleteFilePath($request, 'directors', $director);
        $director->fill($request->all());
        $director->save();

        // update table centers
        $center = Center::find($request->center_id);
        $center->fill([
                'name' => $request->name_center,
                'code' => $request->code,
                'province_id' => $request->province_id,
                'location_id' => $request->location_id,
                'address' => $request->address,
                'phone' => $request->phone
        ]);
        $center->save();

        //update table users
        $user = User::find($request->user_id);
        $user->fill([
            'email' => $request->email
        ]);
        $user->save();

        Session::flash('message','Perfil modificado correctamente');
        return redirect('panelDirectors/profile/'.$id.'/edit');
    }
}
