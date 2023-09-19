@extends('layout/template')

@section('title', 'Coban | Productos')

@section('contenido')
        <main>
                <div class="container py-4">
                        <h1>Ferreteria Coban</h1>
                        <h2>Listado de Productos</h2>
                        <a href="{{url('productos/create')}}" class="btn btn-primary btn-sm">Nuevo Producto</a>
                        <br><br><br><br>

                        <form action="{{ url('/productos/search') }}" method="GET">
                                <div class="mb-3 row">
                                        <input type="text" name="query" placeholder="Buscar producto...">
                                        
                                </div>
                                <button type="submit" class="btn btn-success">Buscar</button>
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