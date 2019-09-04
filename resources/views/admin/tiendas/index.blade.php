@extends("theme/lte/layout")

@section('contenido')
<!----------------------------------------------------------------->
<div class="card card-success">
            <div class="panel panel-default-success">
                <div class="card-header with-border ">
                    <h3 class="card-title">Tiendas</h3>
                </div>
                <div class="card-tool pull-right">
                    <a href="{{ route('tiendas.create') }}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Agregar tienda
                    </a>
                </div>
                </div>
                <div class="card-body">
                     @foreach ($tiendas as $tienda)
    <div class="card card-default">
        <div class="card-header with-border">
          <h3 class="card-title">{{ $tienda->nombre }}</h3>    
          <div class="card-tools pull-right">
              <button type="button" class="btn btn-card-tool" >
            <a  href="{{ route('tiendas.show', $tienda->id) }}">
                <i class="fa fa-fw fa-eye"></i>
            </a>
              </button>
              <button type="button" class="btn btn-card-tool" >
            <a  href="{{ route('tiendas.edit', $tienda->id) }}">
                <i class="fa fa-fw fa-pen"></i>
            </a>
          </button>
          <button type="button" class="btn btn-card-tool" >
            <a  href="{{ route('tiendas.destroy', $tienda->id) }}">
                <i class="fa fa-fw fa-trash warning"></i>
            </a>
          </button>
            <button type="button" class="btn btn-card-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-card-tool" data-widget="remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body" max-width="300" max-height="200">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" max-width="300" max-height="200">
                  <div class="carousel-item active">
                    <img max-width="300" max-height="200"  class="d-block w-100" src="{{ $tienda->file }}"   alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img max-width="300" max-height="200"  class="d-block w-100" src="/images/critor.png"    alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img max-width="300" max-height="200"  class="d-block w-100" src="/images/A29.jpg"   alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            <!-- /.col -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer no-padding">
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
                                
                            </tr>
                </tbody>
            </table>
          
        </div>
        <!-- /.footer -->
    </div>
    @endforeach
      
     </div> 
     {{ $tiendas->render() }}
    </div>
      <!-- /.card -->
      
                        
                   

                   
            
@endsection

