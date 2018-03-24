@extends("la.layouts.app")

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css"/>

@section("contentheader_title", "Encuestas")
@section("contentheader_description", "Encuestas lista")
@section("section", "Encuestas")
@section("sub_section", "Lista")
@section("htmlheader_title", "Encuestas Lista")

@section("headerElems")
@la_access("Encuestas", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal"><i class="fa fa-plus"></i> Encuesta</button>
@endla_access
@endsection

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

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-responsive table-striped">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Encuestas", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Encuesta</h4>
			</div>
			{!! Form::open(['action' => 'LA\EncuestasController@store', 'id' => 'encuesta-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
               <h4>¡Su opinión nos interesa! Los comentarios proporcionados a través de esta encuesta son de gran utilidad para mejorar el desarrollo de eventos subsecuentes.<br><br>

Ayúdenos calificando según el siguiente criterio:</h4><br>
<h3>
5 = Excelente |
4 = Buena |
3 = Satisfactoria |
2 = Regular |
1 = Mala</h3>

					@la_input($module, 'convocatoria_id')
					@la_input($module, 'impresion')<br>
					<h3>¿Cómo evalúa la reunión respecto de…?</h3>
					
					@la_input($module, 'CalificarPres')
					@la_input($module, 'organizacion')
					@la_input($module, 'programacion')
					@la_input($module, 'sede')
					@la_input($module, 'contenido')

<input id="ex6" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="5"/>
<span id="ex6CurrentSliderValLabel"> Valor: <span id="ex6SliderVal">5</span></span>
					<br>
					<br>
					<br>
						<br>
					<br>
					<br>
						<br>
					<br>
					<br>
					@la_input($module, 'expectativa')
					@la_input($module, 'gusto')
					@la_input($module, 'mejorar')
					@la_input($module, 'miembro_id')
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Crear', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.min.js"></script>
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
 <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
 <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
<script>
$(function () {
	$("#example1").DataTable({
	
		dom: 'Bfrtip',
		buttons: [
          
            'excelHtml5',{
              extend: 'print',
               message: 'Autopartes Legazpi',
               exportOptions: {
                    columns: ':visible'
                },
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="http://www.grupoemco.com.mx/" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                    }
                },
            {
                extend: 'pdfHtml5',
                
                message: 'Autopartes Legazpi',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                download: 'open', 
                exportOptions: { columns: ':visible' },
                 
            }
        
           
           
            
        ],
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/encuesta_dt_ajax') }}",
		language: {
			"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
		autoWidth: false,
		scrollY: true,
        scrollX: true,
        scrollCollapse: true,
	});
	$("#encuesta-add-form").validate({
		
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

// With JQuery
$("#ex6").slider();
$("#ex6").on("slide", function(slideEvt) {
	$("#ex6SliderVal").text(slideEvt.value);
});
		</script>
		
@endpush
