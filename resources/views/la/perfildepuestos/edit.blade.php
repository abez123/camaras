@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/perfildepuestos') }}">PerfilDePuesto</a> :
@endsection
@section("contentheader_description", $perfildepuesto->$view_col)
@section("section", "PerfilDePuestos")
@section("section_url", url(config('laraadmin.adminRoute') . '/perfildepuestos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "PerfilDePuestos Edit : ".$perfildepuesto->$view_col)

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
				{!! Form::model($perfildepuesto, ['route' => [config('laraadmin.adminRoute') . '.perfildepuestos.update', $perfildepuesto->id ], 'method'=>'PUT', 'id' => 'perfildepuesto-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'empresa_id')
					@la_input($module, 'titulo')
					@la_input($module, 'departamento')
					@la_input($module, 'funcion')
					@la_input($module, 'nivel')
					@la_input($module, 'puestoreporta')
					@la_input($module, 'puestoreportedirect')
					@la_input($module, 'puestoreporteindire')
					@la_input($module, 'descripcionobjetivo')
					@la_input($module, 'descripcionfuncion')
					@la_input($module, 'elemtonivel')
					@la_input($module, 'elemtoniveltec')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/perfildepuestos') }}">Cancelar</a></button>
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
	$("#perfildepuesto-edit-form").validate({
		
	});
});
</script>
@endpush
