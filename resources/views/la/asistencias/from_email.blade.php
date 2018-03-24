@extends("la.layouts.app")
<style>
/* The alert message box */
.alert {
    padding: 20px;
    background-color: #7CCFBD; /* Red */
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
@section("contentheader_title", "Asistencias")
@section("contentheader_description", "Asistencias lista")
@section("section", "Asistencias")
@section("sub_section", "Lista")
@section("htmlheader_title", "Asistencias Lista")


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


@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::open(['action' => 'LA\AsistenciasController@store', 'id' => 'asistencia-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
					<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
				     <input type="hidden" name="estatus" value="Si">
			<h1>Muchas gracias por confirmar su participación</h1>
	
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Confirmo Asistencia para realizar la confirmación</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Confirmo Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access

@endsection



@push('scripts')

<script>
$(function () {
	
	$("#asistencia-add-form").validate({
		
	});
});
</script>

@endpush
