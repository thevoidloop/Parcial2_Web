<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('producto.index', ['productos' => Producto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'name' => 'required|max:100',
            'stock' => 'required|max:10',
        ]);

        $producto = new Producto();

        $producto->codigo = $request->input('codigo');
        $producto->name = $request->input('name');
        $producto->stock = $request->input('stock');
        $producto->save();

        return view("producto.message",['msg' => "Producto Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('producto.edit', ['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'name' => 'required|max:100',
            'stock' => 'required|max:10',
        ]);

        $producto = Producto::find($id);
        $producto->codigo = $request->input('codigo');
        $producto->name = $request->input('name');
        $producto->stock = $request->input('stock');
        $producto->save();

        return view("producto.message",['msg' => "Producto Guardado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Producto::find($id);
        $alumno->delete();

        return redirect("productos");
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $productos = Producto::where('name', 'LIKE', "%{$query}%")->get();

        return view('producto.index', ['productos' => $productos]);
    }
}
