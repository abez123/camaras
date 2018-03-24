@extends("la.layouts.app")

@section("contentheader_title", "Asistencias")
@section("contentheader_description", "Asistencias lista")
@section("section", "Asistencias")
@section("sub_section", "Lista")
@section("htmlheader_title", "Asistencias Lista")

@section("headerElems")
@la_access("Asistencias", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal"><i class="fa fa-plus"></i> Asistencia</button>
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

@la_access("Asistencias", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Asistencia</h4>
			</div>
			{!! Form::open(['action' => 'LA\AsistenciasController@store', 'id' => 'asistencia-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                    @la_form($module)
					
					{{--
					@la_input($module, 'convocatoria_id')
					@la_input($module, 'miembro_id')
					@la_input($module, 'estatus')
					@la_input($module, 'asistencia')
					--}}
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
        ajax: "{{ url(config('laraadmin.adminRoute') . '/asistencia_dt_ajax') }}",
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
	$("#asistencia-add-form").validate({
		
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
