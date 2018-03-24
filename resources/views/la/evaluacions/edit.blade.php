@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/evaluacions') }}">Evaluacion</a> :
@endsection
@section("contentheader_description", $evaluacion->$view_col)
@section("section", "Evaluacions")
@section("section_url", url(config('laraadmin.adminRoute') . '/evaluacions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Evaluacions Edit : ".$evaluacion->$view_col)

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
				{!! Form::model($evaluacion, ['route' => [config('laraadmin.adminRoute') . '.evaluacions.update', $evaluacion->id ], 'method'=>'PUT', 'id' => 'evaluacion-edit-form']) !!}
				
					@la_input($module, 'candidato_id')
						@la_input($module, 'socio')
					@la_input($module, 'proveedorsocio')
					@la_input($module, 'archivosocio')
				
					@la_input($module, 'psicometrico')
					@la_input($module, 'proveedorpsico')
					@la_input($module, 'archivopsico')
					@la_input($module, 'medico')
					@la_input($module, 'proveedormed')
					@la_input($module, 'archivomed')
					@la_input($module, 'observaciones')
					@la_input($module, 'estatus')
				
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/evaluacions') }}">Cancelar</a></button>
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
	$("#evaluacion-edit-form").validate({
		
	});
});
</script>
@endpush
