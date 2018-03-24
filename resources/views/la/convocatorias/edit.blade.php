@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/convocatorias') }}">Convocatoria</a> :
@endsection
@section("contentheader_description", $convocatoria->$view_col)
@section("section", "Convocatorias")
@section("section_url", url(config('laraadmin.adminRoute') . '/convocatorias'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Convocatorias Edit : ".$convocatoria->$view_col)

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
				{!! Form::model($convocatoria, ['route' => [config('laraadmin.adminRoute') . '.convocatorias.update', $convocatoria->id ], 'method'=>'PUT', 'id' => 'convocatoria-edit-form']) !!}
				
					@la_input($module, 'comite_id')
					@la_input($module, 'tituloconvactoria')
					
					@la_input($module, 'horario')
					@la_input($module, 'sedenombre')
					@la_input($module, 'sededomicilio')
					@la_input($module, 'preciosocio')
					@la_input($module, 'precionosocio')
					@la_input($module, 'temario')
					@la_input($module, 'temarioimagen')
					@la_input($module, 'expositor')
					@la_input($module, 'archivos')
					@la_input($module, 'logoexpositor')
					@la_input($module, 'comentarios')
				
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/convocatorias') }}">Cancelar</a></button>
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
	$("#convocatoria-edit-form").validate({
		
	});
});
</script>

@endpush
