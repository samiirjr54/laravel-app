<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        //return "your values were recieved successfully";
       //return $request->input('username');

       $credentials = $request->validate([
         'username' => 'required | min: 3 | string',
          'email' => 'required|email | string ',
          'password' => 'required | min: 6|uppercase|lowercase'
       ]);

        try{
            User::create($credentials);
            return redirect('/login');
        }catch(QueryException $exception){
            if($exception->getCode() === '23000'){
                //Duplicate entry error
                return redirect()->back()->with('email','The email address is already in use. Please choose a different email.');
            }
            else{
                //return Other database-related error;
                return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
        

        return redirect('/login')->with('success','registration successful,please login to proceed ');

    }
}

    
}