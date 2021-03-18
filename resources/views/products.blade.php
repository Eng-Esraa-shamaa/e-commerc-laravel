
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show products details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>


    <h3 class="text-center">  Products List </h3>
    <table class="table container my-5">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">categorey</th>
            <th scope="col">photo</th>

            <th scope="col">Delete product</th>
            <th scope="col">Edit product</th>


            
          </tr>
        </thead>
        <tbody>
    
    @foreach ( $data as $row )
        
          <tr>
            <th scope="row">{{$row->id}} </th>
            <td>{{$row->productname}}</td>
            <td>{{$row->productprice}}</td> 
            <td>{{$row->categorey}}</td> 
            <td><img src="{{asset('images/'.$row->productphoto)}}"> </td> 

            <td ><a class="text-danger" href="{{URL('deleteproduct/'.$row->id)}}"> Delete </a></td> 
            <td ><a class="text-danger" href="{{URL('editproduct/'.$row->id)}}"> Edit </a></td> 


          </tr>
       
    @endforeach 
    
     </tbody>
      </table>
</body>
</html>

