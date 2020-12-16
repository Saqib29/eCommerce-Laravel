<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $req){
        
        $user =  User::where(['email' => $req->email])->first();
        
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or password doesn't matched!";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
