@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/candidatos') }}">Candidato</a> :
@endsection
@section("contentheader_description", $candidato->$view_col)
@section("section", "Candidatos")
@section("section_url", url(config('laraadmin.adminRoute') . '/candidatos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Candidatos Edit : ".$candidato->$view_col)

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
				{!! Form::model($candidato, ['route' => [config('laraadmin.adminRoute') . '.candidatos.update', $candidato->id ], 'method'=>'PUT', 'id' => 'candidato-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'perfil_id')
					@la_input($module, 'nombrecomp')
					@la_input($module, 'fuente')
					@la_input($module, 'fechacontacto')
					@la_input($module, 'telefono')
					@la_input($module, 'cel')
					@la_input($module, 'correo')
					@la_input($module, 'observaciones')
					@la_input($module, 'cv')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/candidatos') }}">Cancelar</a></button>
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
	$("#candidato-edit-form").validate({
		
	});
});
</script>
@endpush
