<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>



<h4 class="text-center">Edit products for sale</h4>

<form class="container" method="post" action="{{url('editproduct')}}" enctype="multipart/form-data" >

 <div class="form-group">
   <label >Name of Product</label>
   <input type="text" class="form-control" name="productname" value="{{$data->productname}}" >
 </div>

 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <input type="hidden" name="id" value="{{$data->id}}">

 <div class="form-group">
   <label >Product Price</label>
   <input type="text" class="form-control" name="productprice" value="{{$data->productprice}}" >
 </div>

 <div class="form-group">
     <label >Categorey</label>
   <input type="text" class="form-control" name="categorey" value="{{$data->categorey}}" >
     
   </div>

 <div class="form-group">
       <label >Product image</label>
       <input type="file" class="form-control-file" name="productphoto" value="{{$data->productphoto}}" >
     </div>
  
 
 <button type="submit" class="btn btn-primary">edit product</button>
 @if($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif 
</form>

</body>
</html>