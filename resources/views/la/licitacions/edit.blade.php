@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/licitacions') }}">Licitacion</a> :
@endsection
@section("contentheader_description", $licitacion->$view_col)
@section("section", "Licitacions")
@section("section_url", url(config('laraadmin.adminRoute') . '/licitacions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Licitacions Edit : ".$licitacion->$view_col)

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
				{!! Form::model($licitacion, ['route' => [config('laraadmin.adminRoute') . '.licitacions.update', $licitacion->id ], 'method'=>'PUT', 'id' => 'licitacion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'empresa_id')
					@la_input($module, 'codigoexp')
					@la_input($module, 'descripcionexp')
					@la_input($module, 'descripcionanuncio')
					@la_input($module, 'notas')
					@la_input($module, 'plazo')
					@la_input($module, 'archiosconv')
					@la_input($module, 'responsble')
					@la_input($module, 'category_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/licitacions') }}">Cancelar</a></button>
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
	$("#licitacion-edit-form").validate({
		
	});
});
</script>
@endpush
