@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/eventos') }}">Evento</a> :
@endsection
@section("contentheader_description", $evento->$view_col)
@section("section", "Eventos")
@section("section_url", url(config('laraadmin.adminRoute') . '/eventos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Eventos Edit : ".$evento->$view_col)

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
				{!! Form::model($evento, ['route' => [config('laraadmin.adminRoute') . '.eventos.update', $evento->id ], 'method'=>'PUT', 'id' => 'evento-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titulo')
					@la_input($module, 'fecha')
					@la_input($module, 'tipo')
					@la_input($module, 'cuotasocio')
					@la_input($module, 'cuotanosocio')
					@la_input($module, 'ubicacion')
					@la_input($module, 'presentacion')
					@la_input($module, 'video')
					@la_input($module, 'contacto')
					@la_input($module, 'patrocinadores')
					@la_input($module, 'logo')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/eventos') }}">Cancelar</a></button>
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
	$("#evento-edit-form").validate({
		
	});
});
</script>

@endpush
