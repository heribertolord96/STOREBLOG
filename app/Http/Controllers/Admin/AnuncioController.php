<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blogmodels\Anuncio;
use App\Blogmodels\Tienda;
use App\Blogmodels\Tag;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios =Anuncio::orderBy('nombre','ASC')->paginate(20);
        return view('admin.anuncios.index', compact('anuncios'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiendas = Tienda::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $anuncios = Anuncio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tags       = Tag::orderBy('nombre', 'ASC')->get();
        return view('admin.anuncios.create', compact('anuncios', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anuncio = Anuncio::create($request->all());
        return redirect()->route('anuncios.edit', $anuncio->id)
        ->with('info', 'Anuncio agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anuncio = Anuncio::find($id);
        return view('admin.anuncios.show', compact('anuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiendas = Tienda::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $anuncio = Anuncio::find($id);
        return view('admin.anuncios.edit', compact('anuncio'));
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
        $anuncio = Anuncio::find($id);
        $anuncio->fill($request->all())->save();
        return redirect()->route('.anuncios.edit', 
        $anuncio->id)->with('info', 'Info de anuncio actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anuncio = Anuncio::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
