<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{

    function fruits(){
        return view('fruits');
    }

    function apple(){
        return view('apple');
    }

    function orange(){
        return view('orange');
    }

    function mango(){
        return view('mango');
    }

    function dalandan(){
        return view('dalandan');
    }

    function watermelon(){
        return view('watermelon');
    }

    function grape(){
        return view('grape');
    }
   


    function freshgoodies(){
        return view('freshgoodies');
    }

    function porkchop(){
        return view('porkchop');
    }

    function drumstick(){
        return view('drumstick');
    }

    function beefbonemarrow(){
        return view('beefbonemarrow');
    }

    function bangus(){
        return view('bangus');
    }

    function tilapia(){
        return view('tilapia');
    }

    function galunggong(){
        return view('galunggong');
    }
   


    function veggies(){
        return view('veggies');
    }

    function labuyo(){
        return view('labuyo');
    }

    function tomato(){
        return view('tomato');
    }

    function pechay(){
        return view('pechay');
    }

    function sayote(){
        return view('sayote');
    }

    function eggplant(){
        return view('eggplant');
    } 

    function potato(){
        return view('potato');
    }
   

    function shippingaddress(){
        return view('shipping');
    }

    function bayong(){
        return view('bayong');
    }

    function checkout(){
        return view('checkout');
    }

    function purchasesuccess(){
        return view('purchasesuccess');
    }

    function login(){
        if (Auth::check()){
            return redirect(route('bayong'));
        }
        return view('login');
    }

    function signup(){
        if (Auth::check()){
            return redirect(route('bayong'));
        }
        return view('signup');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return view('welcome');
        }
        return redirect(route('login'))->with("error", "Invalid Credential");
    }

    function signupPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['confirmpassword'] = Hash::make($request->passwordconfirmation);
        $user = User::create($data);
        if(!$user){
            return redirect(route('signup'))->with("error", "Registration Failed, please try Again.");
        }
        return redirect(route('login'))->with("success", "Registration Succesful. You can now log in.");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return view('welcome');
    }
}
