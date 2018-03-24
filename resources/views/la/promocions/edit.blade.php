@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/promocions') }}">Promocion</a> :
@endsection
@section("contentheader_description", $promocion->$view_col)
@section("section", "Promocions")
@section("section_url", url(config('laraadmin.adminRoute') . '/promocions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Promocions Edit : ".$promocion->$view_col)

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
				{!! Form::model($promocion, ['route' => [config('laraadmin.adminRoute') . '.promocions.update', $promocion->id ], 'method'=>'PUT', 'id' => 'promocion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'empresa')
					@la_input($module, 'titulo')
					@la_input($module, 'descripcion')
					@la_input($module, 'url')
					@la_input($module, 'imagen')
					@la_input($module, 'creadorpor')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/promocions') }}">Cancelar</a></button>
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
	$("#promocion-edit-form").validate({
		
	});
});
</script>
@endpush
