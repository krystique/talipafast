@extends('layout')
@section('title', 'TalipaFast - Fresh Goodies')
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
            <h1 style="font-family: cursive">FRESH GOODIES</h1>
        </div>
        <div class="cover">

            <a class="box" href="{{route('porkchop')}}">
                <img src="images/porkchop.png" alt="pork chop" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Pork Chop</h3></b>
                <h4 style="color: #006400">₱ 250 per kilo</h4>
                <h5 style="color: black; text-align:center">Got the tender texture and</h5>
                <h5 style="color: black; text-align:center">delicious taste in every meals</h5>
            </a>

            <a class="box" href="{{route('drumstick')}}">
                <img src="images/drumstick.png" alt="chicken drumstick" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Chicken Drumstick</h3></b>
                <h4 style="color: #006400">₱ 160 per kilo</h4>
                <h5 style="color: black; text-align:center">Popular choice for various</h5>
                <h5 style="color: black; text-align:center">dishes because of its yumminess</h5>
            </a>
            
            <a class="box" href="{{route('beefbonemarrow')}}">
                <img src="images/beefbonemarrow.png" alt="beef bone marrow" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Beef Bone Marrow</h3></b>
                <h4 style="color: #006400">₱ 160 per kilo</h4>
                <h5 style="color: black; text-align:center">Has the savory flavor, perfect</h5>
                <h5 style="color: black; text-align:center">for Bulalo and other dishes</h5>
            </a>

        </div>
        <div class="cover">

            <a class="box" href="{{route('bangus')}}">
                <img src="images/bangus.png" alt="Bangus" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Bangus</h3></b>
                <h4 style="color: #006400">₱ 200 per kilo</h4>
                <h5 style="color: black; text-align:center">Has mild flavor, and also</h5>
                <h5 style="color: black; text-align:center">uses in numerous Filipino dishes</h5>
            </a>

            <a class="box" href="{{route('tilapia')}}">
                <img src="images/tilapia.png" alt="tilapia" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Tilapia</h3></b>
                <h4 style="color: #006400">₱ 150 per kilo</h4>
                <h5 style="color: black; text-align:center">Nutritious and yummy freshwater</h5>
                <h5 style="color: black; text-align:center">fish that is widely consumed</h5>
            </a>

            <a class="box" href="{{route('galunggong')}}">
                <img src="images/galunggong.png" alt="galunggong" class="imgs">
                <b><h3 style="color: black; margin-top: 15px">Galunggong</h3></b>
                <h4 style="color: #006400">₱ 150 per kilo</h4>
                <h5 style="color: black; text-align:center">Flavorful fish with firm flesh</h5>
                <h5 style="color: black; text-align:center">and also a versatile ingredient</h5>
            </a>

        </div>
    </body>
</html>
@endsection