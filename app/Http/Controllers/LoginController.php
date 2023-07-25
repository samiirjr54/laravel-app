<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use illuminate\Validation\ValidationException;

class LoginController extends Controller
{
   public function login(Request $request){
      $request->validate([
         'username'=>'required',
         'password'=>'required'
      ]);
       $credentials = $request->only('username', 'password');

       if(Auth::attempt($credentials)){
          return redirect()->intended('/dashboard');
       }
       else{
          //throw ValidationException::withMessages(['message' => 'Invalid credentials'])
         // ->errorBag('default')-> redirect('/login');
          return back()->with('error', 'Error : email or password incorrect');
       };
   }

  public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
