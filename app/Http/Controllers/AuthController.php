<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show(){
        return view ('signup');
    }

 public function register(Request $request)
 {
    $user = User::create([
        'name' =>  $request->name,
        'email' => $request->email,
        'password' =>$request->password,
    ]);

    return redirect()->route('login');
 }
 public function get(){
    return view('login');
 }
 public function login(Request $request){
    $user = User::find([
        'email' => $request->email,
        'password' =>$request->password,
    ]);
    return redirect()->route('index');
 }
}
