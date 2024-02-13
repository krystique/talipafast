<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view('forgetpassword');
    }

    function forgetPasswordPost(Request $request){
        $request->validate([
            'email' =>"required|email|exists:users",
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
        ]);

        Mail::send("emails.forgetpassword", ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("forgetpassword"))
            ->with("success", "We have send an email to reset your password.");
    }

    function resetPassword(){
        return view("newpassword");
    }

    function resetPasswordPost(Request $request){
        $request ->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ]);
    
        $updatePassword = DB::table('password_resets')
            ->where([
                "email" =>$request->email,
            ])->first();
    
        if (!$updatePassword){
            return redirect()->to(route("reset.password"))->with("error", "Invalid");
        }

        User::where("email", $request->email)
            ->update(["password" => Hash::make($request->password)]);

        DB::table("password_resets")->where(["email" => $request->email])->delete();

        return redirect()->to(route("login"))->with("success", "Password reset success");
    
    }

}