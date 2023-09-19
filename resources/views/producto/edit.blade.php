@extends('layout/template')

@section('title', 'Coban | Ingresar Producto')


@section('contenido')
<main>
        <div class="container py-4">
                <h2>Editar Producto</h2>

                @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                        @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                <form action="{{url('productos/'.$producto->id)}}" method="post">
                        @method("PUT")
                        @csrf
                        <div class="mb-3 row">
                                <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
                                <div class="col-sm-5">
                                        <input type="text" class="form-control" name="codigo" id="codigo"
                                        value="{{$producto->codigo}}" requir ed> 
                                </div>
                        </div>

                        <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Producto</label>
                                <div class="col-sm-5">
                                        <input type="text" class="form-control" name="name" id="name"
                                        value="{{$producto->name}}" required>
                                </div>
                        </div>


                        <div class="mb-3 row">
                                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-5">
                                        <input type="text" class="form-control" name="stock" id="stock"
                                        value="{{$producto->stock}}" required>
                                </div>
                        </div>

                        <a href="{{url('productos')}}" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                </form>
        </div>
</main>