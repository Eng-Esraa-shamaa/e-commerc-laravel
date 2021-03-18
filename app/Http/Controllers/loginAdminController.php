<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginAdminController extends Controller
{
    //
    public function loginadmin(Request $request){
        $data= $request->validate([
            
            'email' => 'required|email',
            'password' => 'required',

        ]);


$op=Auth::guard('admins')->attempt($data,true);
      if($op){
          return view('admin');
      }else{
         echo 'Error on login ';
      }  
    }

    public function logout(){
        Auth::guard('admins')->logout();
        return redirect(url('AdminLogin'));
    }
}
