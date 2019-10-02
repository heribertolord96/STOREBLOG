@extends("theme/lte/layout")
@section('contenido')
<div class="card card-warning">
    <div class="panel panel-default-warning">
        <div class="card-header with-border ">
            <h3 class="card-title">Promociones y ofertas</h3>
        </div>
        <div class="card-tool pull-right">
            <a href="{{ route('promos.create') }}" class="btn btn-block btn-info btn-sm">
                <i class="fa fa-fw fa-plus-circle"></i> Agregar Promocion
            </a>
        </div>
        </div>
        <div class="card-body row-md-12">
            @foreach ($promos as $promo)
            <div class="card card-default col-md-3  float-left " max-height="100px" height="200" >                
                <div class="card-header with-border ">  
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-card-tool" >
                      <a  href="{{ route('promos.show', $promo->id) }}">
                          <i class="fa fa-fw fa-eye 10px"></i>
                      </a>
                        </button>
                        <button type="button" class="btn btn-card-tool" >
                      <a  href="{{ route('promos.edit', $promo->id) }}">
                          <i class="fa fa-fw fa-pen 50px"></i>
                      </a>
                    </button>
                    <button type="button" class="btn btn-card-tool" >
                        {!! Form::open(['route' => ['promos.destroy', $promo->id], 'method' => 'DELETE']) !!}
                        <button class="btn-danger">
                            <i class="fa fa-fw fa-trash "></i>
                        </button>                           
                    {!! Form::close() !!}
                    </button>
                      <button type="button" class="btn btn-card-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-card-tool" data-widget="remove">
                        <i class="fa fa-times"></i></button>
                    </div>
                    <br>
                        <h3 class="card-title">{{ $promo->nombre }}</h3>   
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="carouselExampleIndicators{{$promo->id}}" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators{{$promo->id}}" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators{{$promo->id}}" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators{{$promo->id}}" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" max-width="300" max-height="200">
                          <div class="carousel-item active">
                            <img max-width="300" max-height="200"  class="d-block w-100" src="{{ $promo->file }}"   alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img max-width="300" max-height="200"  class="d-block w-100" src="/images/critor.png"    alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img max-width="300" max-height="200"  class="d-block w-100" src="/images/A29.jpg"   alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators{{$promo->id}}" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators{{$promo->id}}" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    <!-- /.col -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer no-padding">
                    <tr>
                        <p><b>Descripción: <br>
                        </b> {{ $promo->descripcion }}</p>
                </tr>
                    <table class="table table-bordered">
                        <tbody>
                                <tr>
                                        <td><b>Fecha de inicio:</b></td>
                                            <td>{{ $promo->fecha_inicio }}</td>                                        
                                    </tr>
                                    <tr>
                                      <td>
                                          <b>Hora de inicio:</b>
                                      </td>
                                      <td>{{ $promo->hora_inicio }}</td>
                                    </tr>
                                        <tr><td><b>Fecha de finalizacion:</b></td>
                                          <td>{{ $promo->fecha_fin }}</td>                                     
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <b>Hora de finalizacion:</b>
                                            </td>
                                            <td>{{ $promo->hora_fin }}</td>
                                        </tr>
                                       
                                   </tr>
                                   
                                <tr>
                                    <td><b>Disponible en: </b></td>
                                    <td><a href="{{route('tienda',$promo->tienda->slug)}}">
                                        {{ $promo->tienda->nombre }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                  
                </div>
                <!-- /.footer -->
            </div>
            @endforeach              
             </div> 
             {{ $promos->render() }}
            </div>
<!-- /.card -->
@endsection