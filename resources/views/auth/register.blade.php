@extends('layouts.app')

@section('titulo')
    Registrate en devstagram
@endsection

@section('contenido')
    <div class="flex flex-col md:flex-row md:justify-center md:items-center">
        <div class = "w-50 max-w-sm mx-5 md:w-4/12">
            <img class="rounded-lg " src="{{ asset('img/registrar.jpg')}}" alt="Imagen regitro usuario">
        </div>
        <div class=" w-full p-6 md:w-4/12 bg-white rounded-lg shadow-2xl shadow-gray-500">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input 
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu Nombre" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full"
                    />
                </div>
                <div class="mb-5">
                    <label for="Username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input 
                        id="Username"
                        name="Username"
                        type="text"
                        placeholder="Tu Nombre de Usuario" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full"
                    />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu email de Registro" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full"
                    />
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Escribe tu contraseña" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full"
                    />
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Contraseña</label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu contraseña" 
                        class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full"
                    />
                </div>
                <input 
                    type="submit"
                    value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer border rounded-lg text-white p-2 font-bold w-full uppercase"
                />
            </form>
        </div>
    </div>
@endsection