<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;
class AdminLoginController extends Controller
{
    //یک تغییر  فقط برای pull request
  public function __construct()
  {
    $this->middleware('guest:admin')->except('logout');
  }
  public function showLoginForm()
  {
      return view('admin.login');
  }
  public function login(Request $request)
  {
    // Validate the form data
    $this->validate($request, [
      'username'   => 'required',
      'password' => 'required|min:6'
    ]);

    // Attempt to log the user in
    if(preg_match('/^09[0-9]{9}$/', $request->username)){$fieldType='mobaile';$errorLog='موبایل یا رمز عبور اشتباه است .';}
    // elseif(filter_var($request->username, FILTER_VALIDATE_EMAIL)){$fieldType='email';}
    else{$fieldType='username';$errorLog='نام کاربری یا رمز عبور اشتباه است .';}
    if (Auth::guard('admin')->attempt([$fieldType => $request->username, 'password' => $request->password], $request->remember)) {
      // if successful, then redirect to their intended location
      return redirect(route('shopProfile'));

    }
    // if unsuccessful, then redirect back to the login with the form data
    return redirect()->back()->withErrors(['username' => trans($errorLog)])->withInput($request->only('username', 'remember'));

  }
  public function logout()
  {
      Auth::guard('admin')->logout();
      return redirect(route('eimanLogin'));
  }
  // protected function guard()
  // {
  //     return Auth::guard('admin');
  // }
}//end class
