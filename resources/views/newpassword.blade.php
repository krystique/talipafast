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
                    <div class="alert alert-danger">Reset Password Error</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">Reset Password Success</div>
                @endif
            </div>
            <form action="{{route('reset.password.post')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter new Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary" style="display: block">Reset Password</button>
            </form>
        </div> 
    </main>
@endsection