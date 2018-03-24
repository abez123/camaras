@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/proyectos') }}">Proyecto</a> :
@endsection
@section("contentheader_description", $proyecto->$view_col)
@section("section", "Proyectos")
@section("section_url", url(config('laraadmin.adminRoute') . '/proyectos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Proyectos Edit : ".$proyecto->$view_col)

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
				{!! Form::model($proyecto, ['route' => [config('laraadmin.adminRoute') . '.proyectos.update', $proyecto->id ], 'method'=>'PUT', 'id' => 'proyecto-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'alianza_id')
					@la_input($module, 'contacto_id')
					@la_input($module, 'descripcion')
					@la_input($module, 'seguimiento')
					@la_input($module, 'estatus')
					@la_input($module, 'archivos')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/proyectos') }}">Cancelar</a></button>
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
	$("#proyecto-edit-form").validate({
		
	});
});
</script>
@endpush
