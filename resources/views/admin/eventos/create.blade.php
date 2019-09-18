@extends("theme/lte/layout")

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="card card-success">
                    <div class="card-header with-border">
                            <h3 class="card-title">Agregar Evento</h3>
                        </div>
                        <div class="panel-body">
                                {!! Form::open(['route' => 'eventos.store', 'files' => true]) !!}
                                    
                                @include('admin.eventos.partials.form')
            
                                {!! Form::close() !!}
                            </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
-->