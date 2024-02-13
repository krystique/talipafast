@extends('layout')
@section('title', 'TalipaFast - Bayong')
@section('content')
    <head>
    <style>  

        .delete {
            text-decoration: none;
            color: black;
            padding: 10px;
            background-color: #d96e68;
            transition: background-color 1.5s;
            cursor: pointer;
            border: 2px solid #808080;
        }

        .delete:hover{
            background-color: #d9544d;
            transition: 0.5s;
        }

        .checkout {
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            background-color: #F38F47;
            transition: background-color 1.5s;
            cursor: pointer;
            border: 2px solid #808080;
        }

        .checkout:hover {
            background-color: #f37547;
            transition: 0.5s;
        }
    </style>
    </head>
    <body style="background-color: #FAF9F6; text-align: center">
        <div class="container" style="margin-top: 50px">
            <h1 style="font-family:cursive">BAYONG</h1>
        </div>
        <div>
            <img src="/images/talipafast temporary logo.png" alt="pic" style="width:25%">
        </div>
        <div>
            <p>Wala pang laman, maglagay ka na</p>
        </div>    
        <div style="margin-top:25px">
            <br>
            <b><a class="delete" href="{{route('signup')}}" style="margin:5px 50px; font-weight: 500;">Delete</a></b>
            <b><a class="checkout" href="{{route('checkout')}}" style="margin:5px 25px  font-weight: 500;">Check Out</a></b>
        <div>
    </body>
@endsection