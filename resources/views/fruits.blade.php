@extends('layout')
@section('title', 'TalipaFast - Fruits')
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
            <h1 style="font-family: cursive">FRUITS</h1>
        </div>
        <div class="cover">

            <a class="box" href="{{route('apple')}}">
                <img src="images/apple.png" alt="apples" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Apple</h3></b>
                <h4 style="color: #006400">₱ 40 per piece</h4>
                <h5 style="color: black; text-align:center">Locally harvested crispy</h5>
                <h5 style="color: black; text-align:center">and sweet apples</h5>
            </a>

            <a class="box" href="{{route('orange')}}">
                <img src="images/orange.png" alt="orange" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Orange</h3></b>
                <h4 style="color: #006400">₱ 35 per piece</h4>
                <h5 style="color: black; text-align:center">Plump, juicy and packed </h5>
                <h5 style="color: black; text-align:center">with Vitamin C</h5>
            </a>
            
            <a class="box" href="{{route('mango')}}">
                <img src="images/mango.jpg" alt="mango" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Mango</h3></b>
                <h4 style="color: #006400">₱ 100 per kilo</h4>
                <h5 style="color: black; text-align:center">Yummy and perfectly-ripe,</h5>
                <h5 style="color: black; text-align:center">Philippine Carabao Mangoes</h5>
            </a>

        </div>
        <div class="cover">

            <a class="box" href="{{route('dalandan')}}">
                <img src="images/dalandan.png" alt="dalandan" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Dalandan</h3></b>
                <h4 style="color: #006400">₱ 40 per kilo</h4>
                <h5 style="color: black; text-align:center">The citrus-sensation that has</h5>
                <h5 style="color: black; text-align:center">thirst-quenching juice</h5>
            </a>

            <a class="box" href="{{route('watermelon')}}">
                <img src="images/watermelon.png" alt="watermelon" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Watermelon</h3></b>
                <h4 style="color: #006400">₱ 50 per piece</h4>
                <h5 style="color: black; text-align:center">Refreshing, juicy and</h5>
                <h5 style="color: black; text-align:center">has the natural sweetness</h5>
            </a>

            <a class="box" href="{{route('grape')}}">
                <img src="images/grape.png" alt="grape" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Grape</h3></b>
                <h4 style="color: #006400">₱ 150 per kilo</h4>
                <h5 style="color: black; text-align:center">Nutritiously sweet and juicy,</h5>
                <h5 style="color: black; text-align:center">has delighful burst of flavor </h5>
            </a>

        </div>
    </body>
</html>
@endsection