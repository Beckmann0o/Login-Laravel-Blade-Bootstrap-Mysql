<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(Request $request){
        $user = Auth::user();
        return view('auth.profile',  ['username'=> $user->username] );
    }

    public function details(Request $request){
        $user = Auth::user();
        return view('auth.detailsaccount',  ['email'=> $user->email, 'username'=> $user->username, 'created_at'=> $user->created_at] );
    }
}
