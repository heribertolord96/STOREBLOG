@extends("theme/lte/layout")
@section('contenido')
<div class="container">
        <div class="card card-success">
                        <h4  bgcolor="#E6E6FA" class="card-title text-warning" >Ver Tienda</h4>                    
                <div class="card-header success with-border ">
                    <h2 class="card-title success">{{ $tienda->nombre }}</h2>
                </div>
                <div class="card-tools pull-right">
                        <button type="button" class="btn btn-card-tool" >
                      <a  href="">
                            <i class="fa fa-fw fa-plus-circle"></i> Nueva Categoria
                      </a>
                        </button>
                        <button type="button" class="btn btn-card-tool" >
                                <a  href="">
                                      <i class="fa fa-fw fa-plus-circle"></i> Nuevo Producto
                                </a>
                                  </button>
                                  <button type="button" class="btn btn-card-tool" >
                                        <a  href="">
                                              <i class="fa fa-fw fa-plus-circle"></i> Nueva Promocion
                                            </a>
                                        </a>
                                          </button>
                                          <button type="button" class="btn btn-card-tool" >
                                                <a  href="">
                                                      <i class="fa fa-fw fa-plus-circle"></i> Nuevo Evento
                                                </a>
                                                  </button>
                                                  <button type="button" class="btn btn-card-tool" >
                                                        <a  href="">
                                                              <i class="fa fa-fw fa-camera"></i>Galeria
                                                        </a>
                                                          </button>
                </div>         
                                
        
                <div class="panel panel-default">                      
                    <div class="panel-body">
                                <img class="d-block w-100" height="100" width="150 "
                                src="{{ $tienda->file }}" 
                                 alt="First slide">
                        </div>
                    <div class="panel-footer">
                            <p><strong>Descripción: <br>
                            </strong> {{ $tienda->descripcion }}</p>
                            <table class="table table-bordered">
                                    <tbody>
                                            <tr>
                                                <td><b>Abrimos a:</b></td>
                                                    <td>{{ $tienda->hora_apertura }}</td>                                                    
                                                </tr>
                                                    <tr>
                                                            <td><b>Cerramos a:</b></td>
                                                            <td>{{ $tienda->hora_cierre }}</td>
                                                    </tr>
                                                    <tr>
                                                            <td><b>Tel.:</b></td>
                                                            <td>{{ $tienda->num_telefono }}</td>
                                                    </tr>
                                                    
                                                </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
                </div>
            
    </div>
@endsection