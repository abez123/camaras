@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/contactoalianzas') }}">ContactoAlianza</a> :
@endsection
@section("contentheader_description", $contactoalianza->$view_col)
@section("section", "ContactoAlianzas")
@section("section_url", url(config('laraadmin.adminRoute') . '/contactoalianzas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "ContactoAlianzas Edit : ".$contactoalianza->$view_col)

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
				{!! Form::model($contactoalianza, ['route' => [config('laraadmin.adminRoute') . '.contactoalianzas.update', $contactoalianza->id ], 'method'=>'PUT', 'id' => 'contactoalianza-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombrecompleto')
					@la_input($module, 'alianza_id')
					@la_input($module, 'telefono')
					@la_input($module, 'celalianza')
					@la_input($module, 'email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/contactoalianzas') }}">Cancelar</a></button>
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
	$("#contactoalianza-edit-form").validate({
		
	});
});
</script>
@endpush
