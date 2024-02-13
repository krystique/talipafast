@extends('layout')
@section('title', 'TalipaFast')
@section('content')
    <head>
    <style> 
        
        h1{ 
            font-family: cursive;
            text-align: center;
            font-size: 75px;
        }

        h3 {
            font-family: Verdana;
        }

        .buttons {
            text-decoration: none;
            border: none;
            background-color: white;   
            font-style: inter;
            color: orange;
            weight: 200;
            margin: 10px 5px;
            font-size: 25px;
            transition: background-color 1.5s; 
        }

        .buttons:hover{
            background-color: orange;
            padding: 5px 15px;
            color: white;
            transition: 1s;
        }

        .container {
            text-align: center; 
        }

        
    </style>
    </head>
    <div class="container" style="margin-top: 75px">
        <h1>Fresh Local Goodies Swift</h1>
        <h1>to your Home</h1>
        <i><h3 style="margin-top: 50px;">Welcome to TalipaFast, we are happy to serve you!</h2></i>
    </div>
    <div class="container" style="margin-top: 50px; font-size: 25px">
        <a class="buttons" href="http://127.0.0.1:8000/fruits">Fruits</a>|
        <a class="buttons" href="http://127.0.0.1:8000/freshgoodies">Fresh Goodies</a>|
        <a class="buttons" href="http://127.0.0.1:8000/veggies">Veggies</a>
    </div>
</html>
@endsection