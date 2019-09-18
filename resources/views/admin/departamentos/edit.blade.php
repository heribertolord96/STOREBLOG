@extends("theme/lte/layout")

@section('contenido')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar Evento
                    </div>
    
                    <div class="panel-body">
                        {!! Form::model($evento, ['route' => ['eventos.update', $evento->id], 'method' => 'PUT']) !!}
                            
                            @include('admin.eventos.partials.form')    
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection