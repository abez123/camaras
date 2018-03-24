@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/comites') }}">Comite</a> :
@endsection
@section("contentheader_description", $comite->$view_col)
@section("section", "Comites")
@section("section_url", url(config('laraadmin.adminRoute') . '/comites'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Comites Edit : ".$comite->$view_col)

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
				{!! Form::model($comite, ['route' => [config('laraadmin.adminRoute') . '.comites.update', $comite->id ], 'method'=>'PUT', 'id' => 'comite-edit-form']) !!}
					
					
				
					@la_input($module, 'nombre')
			
					@la_input($module, 'descripcion')
					@la_input($module, 'objetivos')
					@la_input($module, 'temas')
					@la_input($module, 'fechassesion')
					@la_input($module, 'presidente')
					@la_input($module, 'vicepresidente')
					@la_input($module, 'coordinador')
					<label class="control-label"  for="miembros">Miembros *:</label> <select
							style="width: 100%" name="miembros[]" id="miembros"
							class="form-control js-example-basic-multiple" multiple="multiple"> @foreach($miembros as $item)
							<option value="{{$item->id}}"
								@if(!empty($miembros))
                                        @if($item->id==$miembro)
								            multiple="selected"
								        @endif
								@endif >{{$item->nombre}} | {{$item->name}}</option>
							@endforeach
						</select>
						<br>
					@la_input($module, 'activo')
					
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/comites') }}">Cancelar</a></button>
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
	$("#comite-edit-form").validate({
		
	});
});
$(".js-example-basic-multiple").select2();
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
