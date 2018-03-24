@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/patrocinadores') }}">Patrocinadore</a> :
@endsection
@section("contentheader_description", $patrocinadore->$view_col)
@section("section", "Patrocinadores")
@section("section_url", url(config('laraadmin.adminRoute') . '/patrocinadores'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Patrocinadores Edit : ".$patrocinadore->$view_col)

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
				{!! Form::model($patrocinadore, ['route' => [config('laraadmin.adminRoute') . '.patrocinadores.update', $patrocinadore->id ], 'method'=>'PUT', 'id' => 'patrocinadore-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombrepatroc')
					@la_input($module, 'logopatroc')
					@la_input($module, 'descripcion')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/patrocinadores') }}">Cancelar</a></button>
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
	$("#patrocinadore-edit-form").validate({
		
	});
});
</script>

@endpush
