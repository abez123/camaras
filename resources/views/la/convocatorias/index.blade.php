@extends("la.layouts.app")
<style>
/* The alert message box */
.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}

/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}
</style>
@section("contentheader_title", "Convocatorias")
@section("contentheader_description", "Convocatorias lista")
@section("section", "Convocatorias")
@section("sub_section", "Lista")
@section("htmlheader_title", "Convocatorias Lista")

@section("headerElems")
@la_access("Convocatorias", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal"><i class="fa fa-plus"></i> Convocatoria</button>
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

@la_access("Convocatorias", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Convocatoria</h4>
			</div>
			{!! Form::open(['action' => 'LA\ConvocatoriasController@store', 'id' => 'convocatoria-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">

					@la_input($module, 'comite_id')
					@la_input($module, 'tituloconvactoria')
				
					@la_input($module, 'horario')
					@la_input($module, 'sedenombre')
					@la_input($module, 'sededomicilio')
					@la_input($module, 'preciosocio')
					@la_input($module, 'precionosocio')
					@la_input($module, 'temario')
					@la_input($module, 'temarioimagen')
					@la_input($module, 'expositor')
					@la_input($module, 'archivos')
					@la_input($module, 'logoexpositor')
					@la_input($module, 'comentarios')
				
				</div>
			</div>

			<div class="modal-footer">
			
				
				<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de revisar el formulario antes de crear</h4>
</div>
	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
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


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
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
        ajax: "{{ url(config('laraadmin.adminRoute') . '/convocatoria_dt_ajax') }}",
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
	$("#convocatoria-add-form").validate({
		
	});
});
</script>

@endpush
