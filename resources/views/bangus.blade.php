@extends('layout')
@section('title', 'TalipaFast - Fresh Goodies - Bangus')
@section('content')
    <head>
    <style> 

        .imgs {
            width: 600px;
            display:block;
            margin-left: auto;
            margin-right: 50px;
        }
        
        .cover {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-family: Arial;
            margin-top: 75px;
        }

        .text {
            text-decoration: none;
            width: 300px;
        }

        .minus {
            padding: 5px 15px;
            background-color: #FFD580;
            border: 2px solid #808080;
            margin-right: 10px;
        }

        .plus{
            padding: 5px 15px;
            background-color: #F38F47;  
            border: 2px solid #808080;
            margin-left: 10px;

        }

        .quantity{
            padding: 5px 0;
            width: 50px;
            text-align: center;
        }

        .addtocart {
            text-decoration: none;
            color: black;
            padding: 10px;
            background-color: #FFD580;
            transition: background-color 1.5s;
            cursor: pointer;
            border: 2px solid #808080;
        }

        .addtocart:hover{
            background-color: #ffc280;
            transition: 0.5s;
        }

        .buynow {
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            background-color: #F38F47;
            transition: background-color 1.5s;
            cursor: pointer;
            border: 2px solid #808080;
        }

        .buynow:hover {
            background-color: #f37547;
            transition: 0.5s;
        }


    </style>
    </head>
    <body style="background-color: #FAF9F6;">
        <div class="cover">

            <a class="image">
                <img src="images/bangus.png" alt="bangus" class="imgs">
            </a>
            <div class="text">
                <div>
                    <b><h3 style="color: black;">Bangus</h3></b>
                    <br>
                    <h4 style="color: #006400">₱ 200 per kilo</h4>
                    <br>
                    <h5 style="color: black; text-align:center">Has mild flavor, and also</h5>
                    <h5 style="color: black; text-align:center">uses in numerous Filipino dishes</h5>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: space-evenly; margin-top:50px;">
                    <button class="minus">-</button>
                    <input class="quantity" value="1">
                    <button class="plus">+</button>
                </div>
            <div style="margin-top:50px; width: 350px;">
                <br>
                <a class="addtocart" href="{{route('signup')}}" style="margin:5px 20px; font-weight: 500">Add to Bayong</a></b>
                <a class="buynow" href="{{route('checkout')}}" style="margin:5px 25px; font-weight: 500">Buy Now</a>
            <div>

        </div>
    </body>
</html>
@endsection