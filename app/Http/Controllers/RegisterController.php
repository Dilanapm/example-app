<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    { 
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request->get('Username'));
        $request->validate([
            'name' => 'required|max:20', // tambien se puede: 'name' => ['required','min:5']
            'username' => 'required|unique:users|min:5|max:20',
            'email' => 'required|unique:users|min:7|max:60',
            'password' => 'required',
        ]);
    } 
}
