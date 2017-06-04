<?php

namespace Gihro\Http\Controllers\Auth;

use Gihro\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Gihro\Director;
use Gihro\Teacher;
use Gihro\Kid;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin() {
      return view('panel.auth.login');
    }

    public function postLogin(Request $request) {
    if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
        $actual_user =\Auth::user();
        switch ($actual_user->user_type_id) {
          case 1:
            $director = Director::findBy('user_id',$actual_user->id);
            session(['center_id' => $director[0]->center_id,
                    'director_id' => $director[0]->id,
                    'path' => 'directors/'.$director[0]->path
                    ]);
            return redirect('panelDirectors/profile/'.$director[0]->id.'/edit');
            break;
          case 2:
            $teacher = Teacher::findBy('user_id',$actual_user->id);
            session(['teacher_id' => $teacher[0]->id,
                    'classroom_id' => $teacher[0]->id,
                    'path' => 'teachers/'.$teacher[0]->path
                    ]);
            return redirect('panelTeachers/profile/'.$teacher[0]->id.'/edit');
            break;
          default:
            $kid = Kid::findBy('user_id',$actual_user->id);
            session(['kid_id' => $kid[0]->id,
                    'path' => 'kids/'.$kid[0]->path
                    ]);
            return redirect('panelKids/profile/'.$kid[0]->id.'/edit');
            break;
        }
      }
      Session::flash('message-error','Los datos son incorrectos');
      return redirect('panel');
    }
}
