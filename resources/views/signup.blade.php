@extends('layout')
@section('title', 'TalipaFast')
@section('content')
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

        <form action="{{route('signup.post')}}" method="POST" class="ms-auto me-auto mt-5" style="width: 450px">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password confirmation">
        </div>
        <button type="sign up" class="btn btn-primary">Sign Up</button>
        <div>
            <br>
            <a>Already have an account?</a>
            <a class="login" style="text-decoration : none" href="http://127.0.0.1:8000/login">Login</a>
        </div>
        </form>
    </div>

@endsection