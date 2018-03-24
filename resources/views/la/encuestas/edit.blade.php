@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/encuestas') }}">Encuesta</a> :
@endsection
@section("contentheader_description", $encuesta->$view_col)
@section("section", "Encuestas")
@section("section_url", url(config('laraadmin.adminRoute') . '/encuestas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Encuestas Edit : ".$encuesta->$view_col)

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
				{!! Form::model($encuesta, ['route' => [config('laraadmin.adminRoute') . '.encuestas.update', $encuesta->id ], 'method'=>'PUT', 'id' => 'encuesta-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'convocatoria_id')
					@la_input($module, 'impresion')
					@la_input($module, 'CalificarPres')
					@la_input($module, 'organizacion')
					@la_input($module, 'programacion')
					@la_input($module, 'sede')
					@la_input($module, 'contenido')
					@la_input($module, 'manejo')
					@la_input($module, 'expectativa')
					@la_input($module, 'gusto')
					@la_input($module, 'mejorar')
					@la_input($module, 'miembro_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/encuestas') }}">Cancelar</a></button>
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
	$("#encuesta-edit-form").validate({
		
	});
});
</script>
<script type="text/javascript">
			$(function() {
				$('textarea').summernote({
    height:250
  });
				$('form').submit(function(event) {
					event.preventDefault();
					var form = $(this);

					if (form.attr('id') == '' || form.attr('id') != 'fupload'){
						$.ajax({
							  type : form.attr('method'),
							  url : form.attr('action'),
							  data : form.serialize()
							  }).success(function() {
								  setTimeout(function() {
									   window.parent.close();
									  window.parent.location.reload();
									  }, 10);
							}).fail(function(jqXHR, textStatus, errorThrown) {
			                    // Optionally alert the user of an error here...
			                    var textResponse = jqXHR.responseText;
			                    var alertText = "One of the following conditions is not met:\n\n";
			                    var jsonResponse = jQuery.parseJSON(textResponse);

			                    $.each(jsonResponse, function(n, elem) {
			                        alertText = alertText + elem + "\n";
			                    });
			                    alert(alertText);
			                });
						}
					else{
						var formData = new FormData(this);
						$.ajax({
							  type : form.attr('method'),
							  url : form.attr('action'),
							  data : formData,
							  mimeType:"multipart/form-data",
							  contentType: false,
							  cache: false,
							  processData:false
						}).success(function() {
							  setTimeout(function() {
								  window.parent.close();
								  window.parent.location.reload();
								  }, 10);

						}).fail(function(jqXHR, textStatus, errorThrown) {
		                    // Optionally alert the user of an error here...
		                    var textResponse = jqXHR.responseText;
		                    var alertText = "One of the following conditions is not met:\n\n";
		                    var jsonResponse = jQuery.parseJSON(textResponse);

		                    $.each(jsonResponse, function(n, elem) {
		                        alertText = alertText + elem + "\n";
		                    });

		                    alert(alertText);
		                });
					};
				});

			
			});
		</script>
@endpush
