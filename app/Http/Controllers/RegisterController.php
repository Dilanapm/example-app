<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    { 
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request -> username)]);
        // dd($request->get('Username'));
        $request->validate([
            'name' => 'required|max:20', // tambien se puede: 'name' => ['required','min:5']
            'username' => 'required|unique:users|min:5|max:20',
            'email' => 'required|email|unique:users|min:7|max:60',
            'password' => ['required','string','min:6', // Mínimo 6 caracteres
            'regex:/[A-Z]/', // Al menos una letra mayúscula
            'regex:/[@$!%*?&]/', // Al menos un carácter especial
            'confirmed'
            ],
        ]);
        User::create([
            'name'=> $request -> name,
            'username' => $request -> username,
            'email' => $request -> email,
            'password' => Hash::make($request -> password) 
        ]);
       

        // Autenticando al usuario
        //Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        // otra forma de autenticar
        auth()->attempt($request->only('email','password'));
        //Redireccionar
        return redirect()->route('posts.index', ['user' => auth()->user()->username]);
    }
    
}
