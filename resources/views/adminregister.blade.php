<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
  <form action="{{url('welcomeadmin')}}" method="post" class="m-5" >
						

    <div class="form-group ">
        <label >Username</label>
        <input type="text" value="{{old('name')}}" width="50%" name="name" class="form-control" >
      </div>

      <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <label >Email address</label>
          <input type="text" value="{{old('email')}}" name="email" class="form-control" >
        </div>

        <div class="form-group">
          <label >Password</label>
          <input type="password" value="{{old('password')}}" name="password" class="form-control" >
        </div>
        
        <button type="submit" class="btn btn-warning">Submit</button>

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








