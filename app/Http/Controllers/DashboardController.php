<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function profile(){
         $user  = Auth::user();
         return view('dashboard.profile', compact('user'));
    }

    public function update_profile(Request $request){
        $user = Auth::user();

        $user->update($request->only(['username', 'email']));

        return redirect()->route('dashboard.profile')->with('update', 'Update successful.');  
    }

     public function loan(){
        $user_id = auth()->id();

        $user = User::find($user_id);

        $loans = $user->loans;

        return view('dashboard.loan', compact('loans'));
    }

     public function apply_loan(Request $request){
        $loan = new Loan();  

        $loan->phone = $request->phone;

        $loan->amount = $request->amount;

        $loan->purpose = $request->purpose;

        $loan->user_id = auth()->id();

        $loan->save();
        
        return redirect()->route('dashboard.loanStatement')->with('loan', 'Loan applied successfully');
    }

    public function loan_statement(Request $request){
        $user_id = auth()->id();

        $user = User::find($user_id);

        $loan = $user->loans;

        return view('dashboard.loanStatement',  compact('loan', 'user'));
    }

    public function loan_update_view(Request $request , $id){
        $user = User::find($user_id); 
        $loan = Loan::find($id);
        return view('/dashboard/loanStatementUpdate/{id}',  compact('loan' ));
    }


    public function loan_update(Request $request, $user_id){
      
        $user = User::find($user_id);
        $loan = $user->loans; 
        $loan->update($request->all());   

    }
}
