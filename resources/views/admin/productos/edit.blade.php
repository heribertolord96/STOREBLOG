@extends("theme/lte/layout")

@section('contenido')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar Producto
                    </div>
    
                    <div class="panel-body">
                        {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT']) !!}
                            
                            @include('admin.productos.partials.form')    
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection