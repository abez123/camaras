@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/propuestas') }}">Propuesta</a> :
@endsection
@section("contentheader_description", $propuesta->$view_col)
@section("section", "Propuestas")
@section("section_url", url(config('laraadmin.adminRoute') . '/propuestas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Propuestas Edit : ".$propuesta->$view_col)

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
				{!! Form::model($propuesta, ['route' => [config('laraadmin.adminRoute') . '.propuestas.update', $propuesta->id ], 'method'=>'PUT', 'id' => 'propuesta-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'licitacion_id')
					@la_input($module, 'empresa_id')
					@la_input($module, 'cotizacion')
					@la_input($module, 'contacto_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/propuestas') }}">Cancelar</a></button>
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
	$("#propuesta-edit-form").validate({
		
	});
});
</script>
@endpush
