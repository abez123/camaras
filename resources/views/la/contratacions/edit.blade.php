@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contratacions') }}">Contratacion</a> :
@endsection
@section("contentheader_description", $contratacion->$view_col)
@section("section", "Contratacions")
@section("section_url", url(config('laraadmin.adminRoute') . '/contratacions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Contratacions Edit : ".$contratacion->$view_col)

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
				{!! Form::model($contratacion, ['route' => [config('laraadmin.adminRoute') . '.contratacions.update', $contratacion->id ], 'method'=>'PUT', 'id' => 'contratacion-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'candidato_id')
					@la_input($module, 'fechacontrato')
					@la_input($module, 'observaciones')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contratacions') }}">Cancelar</a></button>
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
	$("#contratacion-edit-form").validate({
		
	});
});
</script>
@endpush
