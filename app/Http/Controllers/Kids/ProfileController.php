<?php

namespace Gihro\Http\Controllers\Kids;

use Illuminate\Http\Request;

use Gihro\Http\Requests;

use Gihro\Http\Controllers\Controller;

use Gihro\Kid;

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
        $profile = Kid::profile($id);
        return view('panel.kids.profile.edit', ['profile' => $profile[0]]);
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
        // update table directors
        $kid = Kid::find($id);
        $this->deleteFilePath($request, 'kids', $kid);
        $kid->fill($request->all());
        $kid->save();


        //update table users
        $user = User::find($request->user_id);
        $user->fill([
            'email' => $request->email
        ]);
        $user->save();

        Session::flash('message','Perfil modificado correctamente');
        return redirect('panelKids/profile/'.$id.'/edit');
    }
}
