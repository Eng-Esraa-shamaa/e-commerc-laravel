<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\products;
use Faker\Provider\Image;

class AdminController extends Controller
{
    //show all customers
    public function showCustomers(){
        $data=customers::get();
        return view('showCustomers',['data'=>$data]);
    }
//delete customer
    public function delete($id){
        $op=customers::where("id",$id)->delete();
        if($op){
            return back();
        }else{
            echo "error ";
        }
    }
//add product function
    public function addproduct( Request $request){
        $data= $request->validate([
            'productname' => 'required|max:50',
            'productprice' => 'required|digits:4',
            'categorey' => 'required',
            'productphoto' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $op=products::create(['productname'=>$data['productname'],'productprice'=>$data['productprice'],'productphoto'=>$data['productphoto'],'categorey'=>$data['categorey']]);
        if($op){
           $photo=$request->productphoto;
           $filename=$photo->getClientOriginalName();
           $location=public_path('images/'.$filename);
           $photo->move($location);
            echo ' product added';
        }else{
            echo 'error in adding';
        }

    }

    //show all products
    public function showproducts(){
        $data=products::get();
        return view('products',['data'=>$data]);
    }


    ///delete product
    public function deleteproduct($id){
        $op=products::where("id",$id)->delete();
        if($op){
        return back() ;
        }else{
            echo "error ";
        }
    }
///edit product
    public function show($id){

        $data=products::find($id);

        return view("editproduct",['data'=>$data]);
    }


    public function editdata( Request $request){
        // $data= $this->validate(request(),[
        //     'productname' => 'max:50',
        //     'productprice' => 'digits:4',
        //     'productphoto' => 'image|mimes:png,jpg,jpeg',

        // ]);
        $op=products::where('id',$request->id)->update(['productname'=>$request->productname,'productprice'=>$request->productprice,'categorey'=>$request->categorey,'productphoto'=>$request->productphoto]);
            if($op){
                return redirect(url('products'));
                //echo 'edit done';
            }else{
                echo 'error';
            }
        
    }
}
