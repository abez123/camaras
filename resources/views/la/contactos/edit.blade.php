@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contactos') }}">Contacto</a> :
@endsection
@section("contentheader_description", $contacto->$view_col)
@section("section", "Contactos")
@section("section_url", url(config('laraadmin.adminRoute') . '/contactos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contactos Edit : ".$contacto->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($contacto, ['route' => [config('laraadmin.adminRoute') . '.contactos.update', $contacto->id ], 'method'=>'PUT', 'id' => 'contacto-edit-form']) !!}
					
					@la_input($module, 'nombre')
					@la_input($module, 'apellidop')
					@la_input($module, 'apellidom')
					@la_input($module, 'tel')
					@la_input($module, 'extension')
					@la_input($module, 'cel')
					@la_input($module, 'whatsapp')
					@la_input($module, 'correo')
					@la_input($module, 'empresa')
					@la_input($module, 'puesto')
						@la_input($module, 'fechanacimiento')
					<input type="hidden" name="role" value="2">
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contactos') }}">Cancelar</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#contacto-edit-form").validate({
		
	});
});
</script>
@endpush
