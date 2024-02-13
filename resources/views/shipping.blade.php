@extends('layout')
@section('title', 'Shipping Address')
@section('content')
    <head>
    <style>         
    </style>
    </head>
    </div>
        <form action="{{ route('login.post') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
        @csrf
        <div class="row">
            <div class="mt-2">
                <div class="form-group">
                    <h2 style="text-align: center; font-family: cursive; margin-bottom: 10px">SHIPPING ADDRESS</h2>
                    <h6>City / Municipality:</h6>
                    <input type="text" name="citymun" class="form-control">
                </div>
            </div>

            <div class="mt-2">
                <div class="form-group">
                    <h6>Barangay:</h6>
                    <input type="text" name="brgy" class="form-control">
                </div>
            </div>

            <div class="mt-2">
                <div class="form-group">
                    <h6>Street / Zone / Purok:</h6>
                    <input type="text" name="szp" class="form-control">
                </div>
            </div>

            <div class="mt-2">
                <div class="form-group">
                    <h6>House Number:</h6>
                    <input type="number" name="housenumber" class="form-control">
                </div>
            </div>

            <div class="mt-2">
                <div class="form-group">
                    <h6>Landmark:</h6>
                    <input type="text" name="landmark" class="form-control">
                </div>
            </div>

            <div class="mt-2" style="margin-bottom: 10px;">
                <div class="form-group">
                    <h6>Mobile Number / Landline:</h6>
                    <input type="number" name="contact" class="form-control">
                </div>
            </div>

            <div class="mt-2 text-center">
                <a class="btn btn-primary" style=" background-color: #FFD580; border: none; color:black; padding: 10px 20px; font-weight: 500;" href="{{ url()->previous() }}">Cancel</a>
                <button type="save" class="btn btn-primary" style="background-color: #F38F47; border: none; color:black; font-weight: 500; padding: 10px 25px;">Save</button>
            </div>
            </div>
        </div>
    </div>
</html>
@endsection