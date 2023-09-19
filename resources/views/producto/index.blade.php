@extends('layout/template')

@section('title', 'Coban | Productos')

@section('contenido')
        <main>
                <div class="container py-4">
                        <div class="text-center">
                                <h1>Ferreteria Coban</h1>
                        </div>
                        <br><br><br>
                        <h2>Listado de Productos</h2>
                        <form action="{{ url('/productos/search') }}" method="GET">
                                <div class="mb-3 row">
                                        <div class="col-auto">
                                            <input type="text" name="query" class="form-control" placeholder="Buscar producto...">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-success">Buscar</button>
                                        </div> 
                                        <div class="col-auto">
                                                <a href="{{url('productos/create')}}" class="btn btn-primary">Nuevo Producto</a>
                                        </div>
                                </div>
                        </form>
                        <table class="table table-hover">    
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Stock</th>
                                    <th>Fecha de creado</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
            
                            <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{$producto->id}}</td>
                                            <td>{{$producto->codigo}}</td>
                                            <td>{{$producto->name}}</td>
                                            <td>{{$producto->stock}}</td>
                                            <td>{{$producto->created_at}}</td>
                                            <td><a href="{{url('productos/'.$producto->id.'/edit')}}" class="btn btn-warning btn-sm" >Editar</a></td>
                                            <td>
                                                <form action="{{url('productos/'.$producto->id)}}" method="POST">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm ">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
            
            
                        </table>
                </div>
        </main>
@endsection