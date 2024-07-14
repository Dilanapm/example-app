@extends('layouts.app')
@section('titulo')
    Tu cuenta
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="w-8/12 lg:w-6/12 px-5" >
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen usuario">
            </div>
            <div class="w-8/12 lg:w-6/12 px-5">
                <p>{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection