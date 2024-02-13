@extends('layout')
@section('title', 'TalipaFast - Purchase Success')
@section('content')
    <head>
    <style>  

        .homepage {
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            background-color: #F38F47;
            transition: background-color 1.5s;
            cursor: pointer;
            border: 2px solid #808080;
        }

        .homepage:hover {
            background-color: #f37547;
            transition: 0.5s;
        }

    </style>
    </head>
    <body style="background-color: #FAF9F6; text-align: center">
        <div class="container" style="margin-top: 50px">
            <h1 style="font-family:cursive">Thank you for your Purchase!</h1>
        </div>
        <div>
            <img src="/images/apples.png" alt="apple" style="width:25%">
        </div>
        <div>
            <h5>Please have this amount ready</h5>
            <p>₱ 80.00</p>

        </div>    
        <div style="margin-top:25px">
            <br>
            <b><a class="homepage" href="http://127.0.0.1:8000" style="margin:5px 25px  font-weight: 500;">Back to Home Page</a></b>
        <div>
    </body>
@endsection