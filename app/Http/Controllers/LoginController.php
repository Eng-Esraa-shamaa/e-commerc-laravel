<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function logindetails(Request $request){
        $data= $request->validate([
            
            'email' => 'required|email',
            'password' => 'required',

        ]);
     
    $op=Auth::guard('customers')->attempt($data,true);
      if($op){
          return view('profile');
      }else{
         echo 'Error on login ';
      }  
    }
    

    public function logout(){
        Auth::guard('cusomers')->logout();
        return redirect(url('Register'));
    }
}
