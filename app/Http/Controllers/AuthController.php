<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $field=$request->validate([
            "name"=>"required|string",
            "email"=>"required|unique:users,email",
            "password"=>"required|confirmed",

        ]);
      $user= User::create([
            "name"=>$field["name"],
            "email"=>$field["email"],
            "password"=> bcrypt($field["password"]),
    
        ]);

        $token =$user->createToken('userToken')->plainTextToken;

        $response=[
            "user"=>$user,
            "token"=>$token
        ];

        return response($response,201);
    }

    public function login(Request $request)
    {
        $field=$request->validate([
            "email"=>"required|string",
            "password"=>"required",

        ]);
         //check email
         $user=User::where("email",$field['email'])->first();

         //check password
        if(!$user || !Hash::check($field["password"],$user->password))
        {
            return "bad credentials";
        }
        $token =$user->createToken('userToken')->plainTextToken;

        $response=["user"=>$user,"token"=>$token];

        return response($response,201);
    }


    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            "mesaage"=>"logged out"
        ];

     
    }
}
