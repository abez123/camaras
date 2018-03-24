@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/screenings') }}">Screening</a> :
@endsection
@section("contentheader_description", $screening->$view_col)
@section("section", "Screenings")
@section("section_url", url(config('laraadmin.adminRoute') . '/screenings'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Screenings Edit : ".$screening->$view_col)

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
				{!! Form::model($screening, ['route' => [config('laraadmin.adminRoute') . '.screenings.update', $screening->id ], 'method'=>'PUT', 'id' => 'screening-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'candidato')
					@la_input($module, 'edad')
					@la_input($module, 'familia')
					@la_input($module, 'escolaridad')
					@la_input($module, 'lugaractual')
					@la_input($module, 'disponibilidad')
					@la_input($module, 'labora')
					@la_input($module, 'comptencias')
					@la_input($module, 'observaciones')
					@la_input($module, 'tiposcreen')
					@la_input($module, 'estatus')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/screenings') }}">Cancelar</a></button>
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
	$("#screening-edit-form").validate({
		
	});
});
</script>
@endpush
