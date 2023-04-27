@include('layouts.homenav')

<!DOCTYPE html>
<html>
<head>
	<title>Register Account</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset ('css/register.css') }}">
</head>
<body>
  
<div class="container">
  <div class="col">
    <form action="{{ route('register.post') }}" method="post" enctype="multipart/form-data">
      @csrf
      
      <!-- Error Message -->
      @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
              <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </div>
      @endif

    <!-- Session Error -->
      @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
      @endif

      <!-- Success Message -->
      @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
      @endif

      
    <h1>Register</h1>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
      <p><a href="/loginform">Already have an account?</a></p>
    </form>
  </div>
</div>
</body>
</html>