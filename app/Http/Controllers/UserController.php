<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function check(Request $req){
        return User::where('name',$req->name)->first();
    }
}
