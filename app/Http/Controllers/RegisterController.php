<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class RegisterController extends Controller
{
    public function getprofile(Request $request){

        $data= $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required',

        ]);
        
         $op=customers::create(['name'=>$data['name'],'email'=>$data['email'],'password'=>bcrypt($data['password'])]);
        if($op){

         
         $name= $request->name;
         $email= $request->email;

         echo "Hello welcome " .$name ."<br>";
         echo "your email " .$email ."<br>";
         echo "Login to continue";


    
         }else{
             echo 'error on inserting';
         }

 }
}
