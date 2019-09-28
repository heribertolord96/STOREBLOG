@extends("theme/lte/layout")
@section('contenido')
<div class="container">
        <div class="card card-default">
                        <h4  class="card-title bg-warning" >Ver Tienda</h4>                    
                <div class="card-header success with-border ">
                    <h2 class="card-title success">{{ $tienda->nombre }}</h2>
                    <div class="card-tools pull-right">
                            <button type="button" class="btn btn-card-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                  </button>
                    </div>
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
                    <div class="card-body">
                                <img class="d-block w-100" height="100" width="150 "
                                src="{{ $tienda->file }}" 
                                 alt="First slide">
                        </div>
                    <div class="card-footer">
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
                @include("admin.tiendas.partials.tienda_tab")
                
            
    </div>
@endsection