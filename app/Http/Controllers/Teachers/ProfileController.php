<?php

namespace Gihro\Http\Controllers\Teachers;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Teacher;

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
        $profile = Teacher::profile($id);

        return view('panel.teachers.profile.edit',
                ['profile' => $profile[0]
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
        // update table teachers
        $teacher = Teacher::find($id);
        $this->deleteFilePath($request, 'teachers', $teacher);
        $teacher->fill($request->all());
        $teacher->save();

        //update table users
        $user = User::find($request->user_id);
        $user->fill([
            'email' => $request->email
        ]);
        $user->save();

        Session::flash('message','Perfil modificado correctamente');
        return redirect('panelTeachers/profile/'.$id.'/edit');
    }
}
