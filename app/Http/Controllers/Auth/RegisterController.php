<?php

namespace Gihro\Http\Controllers\Auth;

use Gihro\User;
use Gihro\Center;
use Gihro\Director;
use Gihro\Kid;
use Validator;
use Gihro\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getRegisterParents() {
      return view('register_parents');
    }


    public function postRegisterParents(Request $request) {
      //insert table users
      $user = User::create([
        'email' => $request->email,
        'password' => $request->password,
        'user_type_id' => 3
      ]);

      //insert table kids
      Kid::create([
        'classroom_id' => 1,
        'user_id' => $user->id,
        'name' => $request->name
      ]);

      Session::flash('message','Registro realizado correctamente');
      return redirect('registerParents');
    }

    public function getRegisterCenters() {
      return view('register_centers');
    }

    public function postRegisterCenters(Request $request) {
      //insert table users
      $user = User::create($request->all());

      // insert table centers
      $center = Center::create([
        'name' => ''
      ]);

      //insert table directors
      $director = Director::create([
        'center_id' => $center->id,
        'user_id' => $user->id,
        'name' => $request->name_director
      ]);

      Session::flash('message','Registro realizado correctamente');
      return redirect('registerCenters');
    }
}
