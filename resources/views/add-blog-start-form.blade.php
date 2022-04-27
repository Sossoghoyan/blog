<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Start Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
   @endif 

    @if($errors->any())
<div class = "alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>


  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Start Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-start-form" id="add-blog-start-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
            <input type="name" name="name" placeholder = "Enter your name" class="form-control" required="">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder = "Enter your email" class="form-control" required="">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder = "Enter your address" class="form-control" required="">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder = "Enter your password" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>