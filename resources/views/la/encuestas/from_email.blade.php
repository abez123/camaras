@extends("la.layouts.app")

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/css/bootstrap-slider.min.css"/>

@section("contentheader_title", "Encuestas")
@section("contentheader_description", "Encuestas lista")
@section("section", "Encuestas")
@section("sub_section", "Lista")
@section("htmlheader_title", "Encuestas Lista")



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


@la_access("Encuestas", "create")
<div class="tab-content">
		<div role="tabpanel" class="tab-pane active fade in" id="tab-info">
			<div class="tab-content">
				<div class="panel infolist">
					<div class="panel-default panel-heading">
						<h4>Información General</h4>
					</div>
					<div class="panel-body">
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
	                @la_input($module, 'manejo')
				<br>
					<br>
					<br>
						<br>
					<br>
			
					@la_input($module, 'expectativa')
					@la_input($module, 'gusto')
					@la_input($module, 'mejorar')
			<input type="hidden" value="{{Auth::user()->id}}" name="miembro_id">
					
		
					</div>
				</div>
			</div>
		</div>
			
								<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Confirmo Asistencia para realizar la confirmación</h4>
</div>
		
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				{!! Form::submit( 'Crear', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>

@endla_access

@endsection


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.9.0/bootstrap-slider.min.js"></script>

<script>
// With JQuery
$("#ex6").slider();
$("#ex6").on("slide", function(slideEvt) {
	$("#ex6SliderVal").text(slideEvt.value);
});
		</script>
		
@endpush
