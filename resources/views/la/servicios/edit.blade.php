@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/servicios') }}">Servicio</a> :
@endsection
@section("contentheader_description", $servicio->$view_col)
@section("section", "Servicios")
@section("section_url", url(config('laraadmin.adminRoute') . '/servicios'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Servicios Edit : ".$servicio->$view_col)

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
				{!! Form::model($servicio, ['route' => [config('laraadmin.adminRoute') . '.servicios.update', $servicio->id ], 'method'=>'PUT', 'id' => 'servicio-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tipo')
					@la_input($module, 'persona')
					@la_input($module, 'estatus')
					@la_input($module, 'comentarios')
					@la_input($module, 'cotizacion')
					@la_input($module, 'pagado')
					@la_input($module, 'asesor')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/servicios') }}">Cancelar</a></button>
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
	$("#servicio-edit-form").validate({
		
	});
});
</script>
@endpush
