<div class="form-group">
        {{ Form::label('nombre', 'Nombre del articulo evento') }}
        {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
     </div>
     <div class="form-group">
        {{ Form::label('slug', 'URL amigable') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
     </div>
     <div class="form-group">
        {{ Form::label('descripcion', 'Descripción') }}
        {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
     </div>
     <table>
            <tr>
                    <td>
                            {{ Form::label('fecha_fin', 'fecha de fin:') }} 
                         </td>
                         <td>
                            {{ Form::date('fecha_fin', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                         </td>
               <td>
                  {{ Form::label('hora_fin', 'Hora de fin:') }} 
               </td>
               <td>
                  {{ Form::time('hora_fin', \Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control']) }}
               </td>
            </tr>
        <tr>
                <td>
                        {{ Form::label('fecha_fin', 'fecha de fin:') }} 
                     </td>
                     <td>
                        {{ Form::date('fecha_fin', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                     </td>
           <td>
              {{ Form::label('hora_fin', 'Hora de fin:') }} 
           </td>
           <td>
              {{ Form::time('hora_fin', \Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control']) }}
           </td>
        </tr>
       
     </table>
     <div class="col-md-12 float-left">
        <div class="form-group">
           {{ Form::label('image', 'Imagen') }}
           {{ Form::file('image') }}
        </div>
     </div>
     </div>
     <div class="form-group panel-footer">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary save' ]) }}
     </div>
     @section('scripts')
     <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
     <script>
        $(document).ready(function(){
            $("#nombre, #slug").stringToSlug({
                callback: function(text){
                    $('#slug').val(text);
                }
            });
        });
     </script>
     @endsection