<!-- esta linea de abajo es una directiva y esta apunta directamente a la carpeta views 
 siempre que tenga una @ es una directiva y en lugar de la diagonal se utiliza punto y tampoco se le pone las extensionees
 a los archivos que se esta señalando-->
@extends('layouts.app')
<!-- con section se va a inyectar el contenido que se quiere utilizar pero tambien hay que finalizarlo -->
@section('titulo')
    pagina principal
@endsection

@section('contenido')
    contenido de la pagina
@endsection