@extends('layout')
@section('title', 'TalipaFast - Veggies')
@section('content')
    <head>
    <style> 
        
        .container {
            text-align: center; 
        }
        

        .imgs {
            justify-content: center;
            width:300px;
            height: 200px;
            border-radius: 15px;
            width:296px; 
            length:251px
        }

        .cover {
            display: flex;
            justify-content: center;
        }

        .box {
            margin: 20px 50px 30px;
            width: 300px;
            height: 400px;
            border: 2px solid #808080;
            border-radius: 17px;
            text-decoration: none;
        }

        h3 {
            margin-left: 15px;
        }

        h4 {
            margin-left: 15px;
            margin-bottom: 30px;
        }


    </style>
    </head>
    <body style="background-color: #FAF9F6;">
        <div class="container" style="margin-top: 25px">
            <h1 style="font-family: cursive">VEGGIES</h1>
        </div>
        <div class="cover">

            <a class="box" href="{{route('labuyo')}}">
                <img src="images/labuyo.png" alt="labuyo" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Labuyo</h3></b>
                <h4 style="color: #006400">₱ 100 per kilo</h4>
                <h5 style="color: black; text-align:center">Small, fiery hot staple</h5>
                <h5 style="color: black; text-align:center">in Filipino cuisine</h5>
            </a>

            <a class="box" href="{{route('tomato')}}">
                <img src="images/tomato.png" alt="tomato" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Tomato</h3></b>
                <h4 style="color: #006400">₱ 60 per kilo</h4>
                <h5 style="color: black; text-align:center">Healthy, juicy and has</h5>
                <h5 style="color: black; text-align:center">mildly sweet taste</h5>
            </a>
            
            <a class="box" href="{{route('pechay')}}">
                <img src="images/pechay.png" alt="pechay" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Pechay</h3></b>
                <h4 style="color: #006400">₱ 50 per kilo</h4>
                <h5 style="color: black; text-align:center">Fresh and it also has the</h5>
                <h5 style="color: black; text-align:center">delightful crunch</h5>
            </a>

        </div>
        <div class="cover">

            <a class="box" href="{{route('sayote')}}">
                <img src="images/sayote.png" alt="sayote" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Sayote</h3></b>
                <h4 style="color: #006400">₱ 60 per kilo</h4>
                <h5 style="color: black; text-align:center">Nutritious vegetable that</h5>
                <h5 style="color: black; text-align:center">has crisp mild texture</h5>
            </a>

            <a class="box" href="{{route('eggplant')}}">
                <img src="images/eggplant.png" alt="eggplant" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Eggplant</h3></b>
                <h4 style="color: #006400">₱ 40 per kilo</h4>
                <h5 style="color: black; text-align:center">It got the tender texture, </h5>
                <h5 style="color: black; text-align:center">and rich earthy flavor</h5>
            </a>

            <a class="box" href="{{route('apple')}}">
                <img src="images/potato.png" alt="potato" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Potato</h3></b>
                <h4 style="color: #006400">₱ 60 per kilo</h4>
                <h5 style="color: black; text-align:center">Easy to use and also a staple</h5>
                <h5 style="color: black; text-align:center">ingredient of various delicacies</h5>
            </a>

        </div>
    </body>
</html>
@endsection