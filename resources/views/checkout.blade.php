@extends('layout')
@section('title', 'TalipaFast - Check Out')
@section('content')
    <head>
    <style>  

        .cancel {
            text-decoration: none;
            color: black;
            padding: 10px;
            background-color: #FFD580;
            transition: background-color 1.5s;
            cursor: pointer;
            border: 2px solid #808080;
        }

        .cancel:hover{
            background-color: #ffc280;
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
            <h1 style="font-family:cursive">CHECK OUT</h1>
        </div>
        <div>
            <img src="/images/apple.png" alt="pic" style="width:25%">
        </div>
        <div>
            <h5>Shipping Address:</h5>
            <p>Please check if the information is correct</p>

            <h6>lagay dito dapat yung address details, pati mode of delivery with price keme</h6>


        </div>    
        <div style="margin-top:25px">
            <br>
            <b><a class="cancel" href="{{ url()->previous() }}" style="margin:5px 25px; padding: auto 50px; font-weight: 500;">Cancel</a></b>
            <b><a class="checkout" href="{{route('shipping')}}" style="margin:5px 25px  font-weight: 500;">Check Out</a></b>
        <div>
    </body>
@endsection