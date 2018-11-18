<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Validator;
use Auth;
class RegisterController extends Controller
{
    protected $redirectPath = 'admin_home';

    //shows registration form to admin
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

  //Handles registration request for admin
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create admin
        $admin = $this->create($request->all());

        //Authenticates admin
        $this->guard()->login($admin);

       //Redirects admin
        return redirect($this->redirectPath);
    }
    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    protected function create(array $data)
    {
        return Admin::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function guard()
   {
       return Auth::guard('admin');
   }


}
