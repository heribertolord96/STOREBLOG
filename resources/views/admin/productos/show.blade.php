@extends("theme/lte/layout")
@section('contenido')
<div class="container">
        <div class="card card-default">                                                           
                <div class="card-header success with-border ">
                                <h2 class="header card-title success">{{ $producto->tienda->nombre }}</h2>
                        <h4  class="card-title bg-warning" >Ver Articulo</h4>                        
                    <h2 class="card-title success">{{ $producto->nombre }}</h2>
                    <div class="card-tools pull-right">
                            <button type="button" class="btn btn-card-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                  </button>
                    </div>
                </div>              
                    <div class="card-body">
                    @if ($producto->file)
                    <img class="d-block w-100" height="300" width="150 "
                    src="{{ $producto->file }}" 
                     alt="First slide">
                    @endif
                                
                        </div>
                    <div class="card-footer">
                            <p><strong>Descripción: <br>
                            </strong> {{ $producto->descripcion }}</p>
                            <table class="table table-bordered">
                                    <tbody>
                                            <tr>
                                                <td><b>Presentacion:</b></td>
                                                    <td>{{ $producto->presentacion }}</td>                                                    
                                                </tr>
                                                    <tr>
                                                            <td><b>Precio:</b></td>
                                                            <td>{{ $producto->precio }}</td>
                                                    </tr>
                                                    <tr>
                                                            <td><b>Categoria</b></td>
                                                            <td>
                                                            <a href="{{route('categoria',$producto->categoria->slug)}}">
                                                                        {{ $producto->categoria->nombre }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Departamento</b></td>
                                                        <td>
                                                                @if ($producto->departamento_id)                                                                
                                                                <a href="{{route('departamento',$producto->departamento->slug)}}">
                                                                                {{ $producto->departamento->nombre }} </a> 
                                                                @endif</td>
                                                </tr>
                                                     </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
                <br>
                <br>
                <div class="card card-default">                                      
                        <div class="card-header success with-border ">    
                                <h4  class="card-title bg-success" >Etiquetas</h4>             
                            <div class="card-tools pull-right">
                                    <button type="button" class="btn btn-card-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                          </button>
                            </div>
                        </div>
                        <div class ="card-body">
                                @foreach($producto->tags as $tags)
                                <a href="{{route('tag',$producto->tag->slug)}}">
                                 {{ $tag->nombre }}</a>
                                </a>
                                @endforeach
                                </div>
                      
                    </div>
    </div>
@endsection