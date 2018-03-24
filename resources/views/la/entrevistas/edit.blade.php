@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/entrevistas') }}">Entrevista</a> :
@endsection
@section("contentheader_description", $entrevista->$view_col)
@section("section", "Entrevistas")
@section("section_url", url(config('laraadmin.adminRoute') . '/entrevistas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Entrevistas Edit : ".$entrevista->$view_col)

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
				{!! Form::model($entrevista, ['route' => [config('laraadmin.adminRoute') . '.entrevistas.update', $entrevista->id ], 'method'=>'PUT', 'id' => 'entrevista-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'candidatoentre')
					@la_input($module, 'observacion')
					@la_input($module, 'estatus')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/entrevistas') }}">Cancelar</a></button>
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
	$("#entrevista-edit-form").validate({
		
	});
});
</script>
@endpush
