@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/comunicacions') }}">Comunicación</a> :
@endsection
@section("contentheader_description", $comunicacion->$view_col)
@section("section", "Comunicación")
@section("section_url", url(config('laraadmin.adminRoute') . '/comunicaciã³ns'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Comunicación Edit : ".$comunicacion->$view_col)

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
				{!! Form::model($comunicacion, ['route' => [config('laraadmin.adminRoute') . '.comunicacions.update', $comunicacion->id ], 'method'=>'PUT', 'id' => 'comunicacion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titulo')
					@la_input($module, 'descripcion')
					@la_input($module, 'fechaenvio')
					@la_input($module, 'todos')
					@la_input($module, 'enviara')
					@la_input($module, 'enviarempresas')
					@la_input($module, 'images')
					@la_input($module, 'video')
					@la_input($module, 'escritopor')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/comunicacions') }}">Cancelar</a></button>
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
	$("#comunicacion-edit-form").validate({
		
	});
});
</script>
@endpush
