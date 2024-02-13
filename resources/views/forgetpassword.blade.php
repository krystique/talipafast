@extends('layout')
@section('title', 'TalipaFast  - Reset Password')
@section('content')
    <main>
        <div class="ms-auto me-auto mt-5" style="width: 600px">
            <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{$session('error')}}</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{$session('success')}}</div>
                @endif
            </div>
            <p>A link will be send to your email. Use that link to reset your password.</p>
            <form action="{{route('forget.password.post')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary" style="display: block">Submit</button>
                <i><a class="skip" style="text-decoration:none" href="http://127.0.0.1:8000/newpassword">Skip</a></i>
            </form>
        </div> 
    </main>
@endsection