<?php

namespace App\Http\Controllers;

use App\Models\admins;
use Illuminate\Http\Request;

class registerAdminController extends Controller
{
    //
    public function getAdmin(Request $request){

        $data= $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required',

        ]);
        
         $op=admins::create(['name'=>$data['name'],'email'=>$data['email'],'password'=>bcrypt($data['password'])]);
        if($op){

         
         $name= $request->name;
         $email= $request->email;

         echo "Hello welcome  admin" .$name ."<br>";
         
         echo "Login to continue";


    
         }else{
             echo 'error on inserting';
         }

 }
}
