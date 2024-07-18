@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:justify-items-center">
        <div class="md:w-1/2 px-10 pb-5">
            <form action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data" id='dropzone' class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class=" w-full p-6 md:w-4/12 bg-white rounded-lg shadow-2xl shadow-gray-400">
            <form action="{{ route('register') }}" method="POST novalidate">
                @csrf
                <div class=" p-5 bg-white shadow-2xl">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                            <input 
                                id="titulo"
                                name="titulo"
                                type="text"
                                placeholder="Título de la publicación" 
                                class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full 
                                @error('titulo')
                                    border-red-600
                                @enderror"
                                value="{{ old('titulo') }}"
                            />
                            @error('titulo')
                            <p class="text-sm font-bold text-red-600">{{ $message }}</p>
                        @enderror
                </div>
    
                <div class=" p-5  bg-white shadow-2xl ">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">descripcion</label>
                            <textarea 
                                id="descripcion"
                                name="descripcion"
                                placeholder="Descripcion de la publicación" 
                                class="border border-gray-500 text-left font-semibold p-3 rounded-lg w-full 
                                @error('descripcion')
                                    border-red-600
                                @enderror"
                            ></textarea>
                            @error('descripcion')
                            <p class="text-sm font-bold text-red-600">{{ $message }}</p>
                        @enderror
                </div>
                <input 
                        type="submit"
                        value="Crear publicacion"
                        class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer border rounded-lg text-white p-2 font-bold w-full uppercase mt-2"
                    />
            </form>
        </div>

        
        
    </div>
@endsection