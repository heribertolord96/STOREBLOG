@extends("theme/lte/layout")

@section('contenido')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar Promocion
                    </div>
    
                    <div class="panel-body">
                        {!! Form::model($promo, ['route' => ['promos.update', $promo->id], 'method' => 'PUT']) !!}
                            
                            @include('admin.promos.partials.form')    
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection