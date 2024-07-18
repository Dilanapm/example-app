@extends('layouts.app')
@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="flex flex-col items-center w-full md:w-8/12  md:flex-row lg:w-6/12">
            <div class=" w-4/12 lg:w-6/12 px-5" >
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen usuario">
            </div>
            <div class="flex flex-col justify-center items-center md:items-start px-5 w-6/12 md:w-8/12 lg:w-6/12"> 
            
                <p class="text-gray-800 font-bold text-lg uppercase lg:text-2xl">{{ $user->username }}</p>
                <p class="text-gray-800 font-semibold text-sm mt-5 lg:text-xl">0 <span class="font-normal">Seguidores</span></p> 
                <p class="text-gray-800 font-semibold text-sm lg:text-xl">0 <span class="font-normal">Siguiendo</span></p> 
                <p class="text-gray-800 font-semibold text-sm lg:text-xl">0 <span class="font-normal">Posts</span></p> 
            </div>
        </div>
    </div>
@endsection