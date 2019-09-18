<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blogmodels\Producto;
use App\Blogmodels\Tienda;
use App\Blogmodels\Categoria;
use App\Blogmodels\Departamento;
use App\Blogmodels\Tag;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos =Producto::orderBy('nombre','ASC')->paginate(20);
        return view('admin.productos.index', compact('productos'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendas = Tienda::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $categorias = Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $departamentos = Departamento::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tags       = Tag::orderBy('nombre', 'ASC')->get();
        return view('admin.productos.create', compact('tiendas', 'tags','categorias','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return redirect()->route('productos.edit', $producto->id)
        ->with('info', 'Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('admin.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_tienda)
    {
        $tiendas = Tienda::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $categorias = Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $departamentos = Departamento::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        $producto = Producto::find($id);
        $tiendas = Tienda::find($id_tienda);
        return view('admin.productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->fill($request->all())->save();
        return redirect()->route('.productos.edit', 
        $producto->id)->with('info', 'Info de producto actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
