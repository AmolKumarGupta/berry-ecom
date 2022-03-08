<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function check(Request $req){
      $validated = $req->validate([
        'name'=>'required|exists:users,name|max:20',
        'password'=>'required',
      ]);
      $user = User::where('name',$req->name)->first();
      if($user->password != $req->password){
        return redirect('login')->with('wrongpwd','Your password is incorrect');
      }
      session(['name'=>$user->name]);
      return view('index',array('data'=>Product::all()));
    }

    public function logout(Request $req){
      $req->session()->forget('name');
      return view('index',array('data'=>Product::all()));
    }
}
