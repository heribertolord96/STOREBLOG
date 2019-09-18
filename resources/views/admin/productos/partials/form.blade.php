
    <div class="form-group">
            {{ Form::label('tienda_id', 'Tienda') }}
            {{ Form::select('tienda_id', $tiendas, null, ['class' => 'form-control']) }}
        </div> 
        <div class="form-group">
                {{ Form::label('departamento_id', 'Departamento') }}
                {{ Form::select('departamento_id', $departamentos, null, ['class' => 'form-control']) }}
            </div> 
            <div class="form-group">
                    {{ Form::label('categoria_id', 'Categoria') }}
                    {{ Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) }}
                </div> 



<div class="form-group">
        {{ Form::label('nombre', 'Nombre del articulo') }}
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
        <div class="form-group">
                {{ Form::label('presentacion', 'Presentacion') }}
                {{ Form::text('presentacion', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                    {{ Form::label('precio', 'Precio') }}
                    {{ Form::text('precio', null, ['class' => 'form-control']) }}
                </div>
                        
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