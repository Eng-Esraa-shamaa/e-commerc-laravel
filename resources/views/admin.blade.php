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
  <div class="row my-5">
    <div class="col-1"></div>
  <div class="col-2 my-5 px-3">
   <a type="button" class="btn btn-info my-3  " href="{{URL('showCustomers')}}" >Show Customers</a> <br>
   {{-- <a type="button" class="btn btn-info my-3 px-4" href="" >Show Orders</a> <br> --}}
   <a type="button" class="btn btn-info my-3 px-3" href="{{URL('products')}}" >Show products</a> <br>
</div>

 <div class="col-9"> 
   <h4 class="text-center">Add products for sale</h4>

   <form class="container" method="post" action="productstatus" enctype="multipart/form-data">

    <div class="form-group">
      <label >Name of Product</label>
      <input type="text" class="form-control" name="productname" >
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
      <label >Product Price</label>
      <input type="text" class="form-control" name="productprice" >
    </div>
    <div class="form-group">
        <label >Categorey</label>
      <input type="text" class="form-control" name="categorey" >
        
      </div>

    <div class="form-group">
          <label >Product image</label>
          <input type="file" class="form-control-file" name="productphoto" >
        </div>
     
    
    <button type="submit" class="btn btn-info">Add product</button>
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
 </div>
</div>
</body>
</html>