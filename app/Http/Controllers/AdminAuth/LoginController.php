<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/admin_home';
    //Trait
    use AuthenticatesUsers;
    protected function guard()
    {
      return Auth::guard('admin');
    }
    public function showLoginForm()
   {
       return view('admin.login');
   }
   public function logout(Request $request) {
     Auth::guard('admin')->logout();
    return redirect('/admin_login');
  }
}