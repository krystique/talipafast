<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TalipaFast - Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar" style="background-color: #9AAB89;">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://127.0.0.1:8000">TalipaFast</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/signup">Sign Up</a>
        </li>
      </span>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">Invalid Credential</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">Log in Successful</div>
            @endif
        </div>
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-5" style="width: 450px">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="login" class="btn btn-primary" style="display: block">Log In</button>
        <br>
        <i><a class="forgotpass" style="text-decoration:none; text-align: right " href="http://127.0.0.1:8000/forgetpassword">Forgot password?</a></i>
        <div>
            <a>New Here?</a>
            <a class="signup" style="text-decoration : none" href="http://127.0.0.1:8000/signup">Sign Up</a>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>