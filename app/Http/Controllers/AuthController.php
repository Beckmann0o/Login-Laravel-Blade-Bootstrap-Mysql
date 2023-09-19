<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('vista/profile'); // Redirigir a la vista de perfil
    }

    return redirect()->back()->withErrors(['message' => 'Credenciales inválidas']);
    }  
}

