@extends("theme/lte/layout")
@section('contenido')
<div class="container">
        <div class="card card-default">          
                <h2 class="card-title success">{{ $departamento->tienda->nombre }}</h2>                                  
                <div class="card-header success with-border ">
                        <h4  class="card-title bg-warning" >Ver Evento</h4>
                    <h2 class="card-title success">{{ $evento->nombre }}</h2>
                    <div class="card-tools pull-right">
                            <button type="button" class="btn btn-card-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                  </button>
                    </div>
                </div>              
                    <div class="card-body">
                                <img class="d-block w-100" height="300" width="150 "
                                src="{{ $evento->file }}" 
                                 alt="First slide">
                        </div>
                    <div class="card-footer">
                            
                            <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                                <p><b>Descripción: <br>
                                                </b> {{ $evento->descripcion }}</p>
                                        </tr>
                                           
                                            <tr>
                                                <td><b>Inicio:</b></td>
                                                    <td>{{ $evento->fecha_inicio }}</td>                                                    
                                                </tr>
                                                    <tr>
                                                            <td><b>Fin:</b></td>
                                                            <td>{{ $evento->fecha_fin }}</td>
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
                        <div class="card-body">
                            <p>Etiquetas :</p>
                        </div>
                    </div>
                
            
    </div>
@endsection