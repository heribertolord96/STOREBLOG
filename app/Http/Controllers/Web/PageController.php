<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blogmodels\Anuncio;
use App\Blogmodels\Tienda;
use App\Blogmodels\Tag;
use App\Blogmodels\Producto;
use App\Blogmodels\Evento;


class PageController extends Controller
{
    //productos
        public function productos()
        {
            $productos = Producto::orderBy('id', 'DESC')->paginate(3);
            return view('admin.productos.index', compact('productos'));
        }  
        public function articulo($slug)
        {
            $producto = Producto::where('slug', $slug)->first();
            return view('admin.productos.show', compact('producto'));
        }
    //    

    public function tienda($slug)
    {
        $tienda = Tienda::where('slug', $slug)->pluck('id')->first();
        $productos = Producto::where('tienda_id', $tienda)
            ->orderBy('id', 'DESC')->paginate(3);
        return view('admin.productos.index', compact('productos'));
    }
    /*
    public function tag($slug){ 
        $productos = Producto::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('admin.productos.index', compact('productos'));
    }*/

    
    public function promos($slug)
        {
            $promos = Promo::orderBy('id', 'DESC')->paginate(3);
            return view('admin.promos.index', compact('promos'));
        }  
    public function promo($slug)
    {
    	$promo = Promo::where('slug', $slug)->first();
    	return view('admin.promos.show', compact('promo'));
    }

    public function Eventos($slug)
    {
        $eventos = evento::orderBy('id', 'DESC')->paginate(3);
        return view('admin.eventos.index', compact('eventos'));
    }  
    public function evento($slug)
    {
    	$evento = Evento::where('slug', $slug)->first();
    	return view('admin.eventos.show', compact('evento'));
    }

    public function anuncios($slug)
    {
        $anuncios = Anuncio::orderBy('id', 'DESC')->paginate(3);
        return view('admin.anuncios.index', compact('anuncios'));
    }  
    public function anuncio($slug)
    {
    	$anuncio = Anuncio::where('slug', $slug)->first();
    	return view('admin.anuncios.show', compact('anuncio'));
    }
}
