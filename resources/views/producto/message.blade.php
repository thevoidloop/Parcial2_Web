@extends('layout/template')

@section('title', 'Coban | Ingresar Producto')

@section('contenido')
<main>
        <div class="container py-4">
                <h2>{{$msg}}</h2>

                <a href="{{url('/productos')}}" class="btn btn-secondary">Regresar</a>
        </div>
</main> 