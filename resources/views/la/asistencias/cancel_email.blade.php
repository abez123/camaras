@extends("la.layouts.app")
<style>
/* The alert message box */
.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}

.alertfine {
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
day of week event {{$dayofweek}}
days diff{{$days}}
 @if($dayofweek !=2 || $dayofweek !=3)
  @if($asistencia->estatus == 'Si' && $days >= 3)

@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
						<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
					
				     <input type="hidden" name="estatus" value="Cancelada">
				<h1>Puede cancelar su participación sin cobro sin compromiso</h1>
	
					</div>
				</div>
			</div>
		</div>
			
								<div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access
		
@elseif($asistencia->estatus == 'Si'  && $days <= 2 && $days >=1)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
					
						<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
				     <input type="hidden" name="estatus" value="Cancelada con cobro">
			
			<h1>Su cancelación aun tendrá el cobro del 100%</h1>
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de revisar el formulario antes de crear</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access

@elseif($asistencia->estatus == 'Si'  && $days <=0)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
		
			<div class="modal-body">
				<div class="box-body">
                
					
					
				
			
			<h1>Evento cerrado</h1>
					</div>
				</div>
			</div>
		</div>
			

				
		</div>

@endla_access

@else
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
					
					
				    
			
			<h1>Su particpación ya fue cancelada</h1>
					</div>
				</div>
			</div>
		</div>
			

		</div>

@endla_access

		@endif
@elseif($daysofweek ==2)
     @if($asistencia->estatus == 'Si'  && $days <= 4)
 
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
						<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
					
				     <input type="hidden" name="estatus" value="Cancelada">
			
	
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de revisar el formulario antes de crear</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
@endla_access

@elseif($asistencia->estatus == 'Si'  && $days <= 1 && $days >=0)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
						<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
					
				     <input type="hidden" name="estatus" value="Cancelada con cobro">
			
			<h1>Su cancelación aun tendrá el cobro del 100%</h1>
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de revisar el formulario antes de crear</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access

@elseif($asistencia->estatus == 'Si'  && $days <=0)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
		
			<div class="modal-body">
				<div class="box-body">
                
					
					
				
			
			<h1>Evento cerrado</h1>
					</div>
				</div>
			</div>
		</div>
			

				
		</div>

@endla_access

@else
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
					
					
				    
			
			<h1>Su particpación ya fue cancelada</h1>
					</div>
				</div>
			</div>
		</div>
			

		</div>

@endla_access

		@endif

@elseif($daysofweek ==3)

  @if($asistencia->estatus == 'Si'  && $days <= 2)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
					
						<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
				     <input type="hidden" name="estatus" value="Cancelada">
			
	
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de revisar el formulario antes de crear</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access


@elseif($asistencia->estatus == 'Si'  && $days <= 1 && $days >=0)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
						<input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
					<input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
					
				     <input type="hidden" name="estatus" value="Cancelada con cobro">
			
			<h1>Su cancelación aun tendrá el cobro del 100%</h1>
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de revisar el formulario antes de crear</h4>
</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access

@elseif($asistencia->estatus == 'Si'  && $days <0)
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
		
			<div class="modal-body">
				<div class="box-body">
                
					
					
				
			
			<h1>Evento cerrado</h1>
					</div>
				</div>
			</div>
		</div>
			

				
		</div>

@endla_access

@else
@la_access("Asistencias", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
			{!! Form::model($asistencia, ['route' => [config('laraadmin.adminRoute') . '.asistencias.update', $asistencia->id ], 'method'=>'PUT', 'id' => 'asistencia-edit-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                
					
					
				    
			
			<h1>Su particpación ya fue cancelada</h1>
					</div>
				</div>
			</div>
		</div>
			

		</div>

@endla_access

   @endif
@endif
@endsection



@push('scripts')

<script>
$(function () {
	
	$("#asistencia-add-form").validate({
		
	});
});
</script>

@endpush
