@extends('layouts.app')

@section('titulo')
    Inicia Sesion en Devstagram
@endsection

@section('contenido')
    <div class="flex flex-col md:flex-row md:justify-center md:items-center">
        <div class = "w-50 max-w-sm mx-5 md:w-4/12">
            <img class="rounded-lg " src="{{ asset('img/login.jpg')}}" alt="Imagen login de usuario">
        </div>
        <div class=" w-full p-6 md:w-4/12 bg-white rounded-lg shadow-2xl shadow-gray-500">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf 

                @if (session('mensaje'))
                <p class=" w-6/12 flex justify-center text-sm font-bold text-white bg-red-500 p-2 my-4">
                    {{ session('mensaje') }}
                </p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu email de Registro" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full
                        @error('email')
                            border-red-600
                        @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <p class="text-sm font-bold text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Escribe tu contraseña" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full
                        @error('password')
                            border-red-600
                        @enderror"
                    />
                    @error('password')
                        <p class="text-sm font-bold text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <input 
                    type="submit"
                    value="Iniciar Sesion"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer border rounded-lg text-white p-2 font-bold w-full uppercase"
                />
            </form>
        </div>
    </div>
@endsection