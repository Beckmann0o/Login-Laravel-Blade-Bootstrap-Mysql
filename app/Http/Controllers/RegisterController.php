<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        //el metodo with permite pasr info entre diferentes solicitudes http, es decir que el mensaje tu cuenta se ha creado..
        //va estar diponible para la siguiente solicitud 
        return redirect('vista/login')->with('success', '¡Tu cuenta se ha creado con éxito!');
    }
}
