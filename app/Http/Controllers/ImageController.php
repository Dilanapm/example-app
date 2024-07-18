<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class ImageController extends Controller
{
    public function store(Request $request){
        // Identificar el archivo que se esta subiendo
        // para ver todos los request
        // $input = $request->all(); 
        // para que retorne una repuesta tipos jason que hace de la variable input un arreglo
        // json es una tecnologia de transporte, se puede comunicar el backend con el frontend 
        // return response()->json($input);
        $imagen = $request->file('file'); // parque seleccione el archivo
        // return response()->json(['imagen'=>$imagen->extension()]); retorna la extension de la imagen que se puede ver a la hora de inspeccionar en la pestaña network y en response
        // return response()->json(['imagen' => "Probando respuesta"]);
        $nombreImagen = Str::uuid(). "." . $imagen->extension();

        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(1000,1000);

        $imagenPath = public_path('uploads') . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
