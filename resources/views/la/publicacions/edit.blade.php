@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/publicacions') }}">Publicacion</a> :
@endsection
@section("contentheader_description", $publicacion->$view_col)
@section("section", "Publicacions")
@section("section_url", url(config('laraadmin.adminRoute') . '/publicacions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Publicacions Edit : ".$publicacion->$view_col)

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
				{!! Form::model($publicacion, ['route' => [config('laraadmin.adminRoute') . '.publicacions.update', $publicacion->id ], 'method'=>'PUT', 'id' => 'publicacion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'perfil_id')
					@la_input($module, 'titulopub')
					@la_input($module, 'texto')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/publicacions') }}">Cancelar</a></button>
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
	$("#publicacion-edit-form").validate({
		
	});
});
</script>
@endpush
