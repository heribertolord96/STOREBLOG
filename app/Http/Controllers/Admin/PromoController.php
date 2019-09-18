<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blogmodels\Promocion;
use App\Blogmodels\Tienda;
use App\Blogmodels\Tag;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos =Promocion::orderBy('nombre','ASC')->paginate(20);
        return view('admin.promos.index', compact('promos'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promos = Promocion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tags       = Tag::orderBy('nombre', 'ASC')->get();
        return view('admin.promos.create', compact('promos', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = Promocion::create($request->all());
        return redirect()->route('promos.edit', $promo->id)
        ->with('info', 'Promocion agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promo = Promocion::find($id);
        return view('admin.promos.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promo = Promocion::find($id);
        return view('admin.promos.edit', compact('promo'));
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
        $promo = Promocion::find($id);
        $promo->fill($request->all())->save();
        return redirect()->route('promos.edit', 
        $promo->id)->with('info', 'Info de promocion actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promocion::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
