@include('layouts.partials.htmlheader')
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
<body>
<div id="main-wrapper">
@include('layouts.partials.top_toolbar')  
@include('layouts.partials.navmenu')  
 

  <!-- SUB Banner -->
  <div class="profile-bnr sub-bnr user-profile-bnr">
    <div class="position-center-center">
      <div class="container">
        <h2>Comité</h2>
      </div>
    </div>
  </div>


  <div class="blog-content pt60">
    <div class="container">
      <div class="row">

<div class="tab-content">
    <div role="tabpanel" class="tab-pane active fade in" id="tab-info">
      <div class="tab-content">
        <div class="panel infolist">
          <div class="panel-default panel-heading">
            <h4>Encuesta de comité</h4>
          </div>
          <div class="panel-body">
             <form class="form-horizontal" method="post"
      action="{{ URL::to('/encuestas/storeencuesta/'.$convocatoria_id) }}"
      autocomplete="off" id="encuesta-edit-form">
   <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
      <div class="modal-body">
        <div class="box-body">
               <h4>¡Su opinión nos interesa! Los comentarios proporcionados a través de esta encuesta son de gran utilidad para mejorar el desarrollo de eventos subsecuentes.<br><br>

Ayúdenos calificando según el siguiente criterio:</h4><br>
<h3>
Excelente |
Buena |
Satisfactoria |
Regular |
Mala</h3>

         <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
         <div class="form-group">
            <label>¿Cuál es su impresión general de nuestra reunión?</label>
         <select name="impresion">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
          <h3>¿Cómo evalúa la reunión respecto de…?</h3>
                <div class="form-group">
            <label> ¿Cómo calificaría la presentación?</label>
         <select name="CalificarPres">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
              <div class="form-group">
            <label>Organización y Logística </label>
         <select name="organizacion">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
                   <div class="form-group">
            <label>Programación (mes, día y hora)</label>
         <select name="programacion">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
                      <div class="form-group">
            <label> Sede del Evento</label>
         <select name="sede">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
                           <div class="form-group">
            <label>  Contenido del Programa</label>
         <select name="contenido">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
                                  <div class="form-group">
            <label> Manejo de Preguntas y Respuestas</label>
         <select name="manejo">
           <option value="5">Excelente</option>
          <option value="4">Buena</option>
          <option value="3">Satisfactoria</option>
          <option value="2">Regular</option>
           <option value="1">Mala</option>
         </select>
         
         </div>
        
         <br>
         <div class="form-group">
          <label>¿Cuál era tu expectativa del evento?</label>
          <textarea name="expectativa"></textarea>
         </div>
         <br>
           <div class="form-group">
          <label>¿Qué fue lo que más te gustó?</label>
          <textarea name="gusto"></textarea>
         </div>
         <br>
               <div class="form-group">
          <label>¿Qué podemos mejorar?</label>
          <textarea name="mejorar"></textarea>
         </div>
         <br>
      <input type="hidden" value="{{Auth::user()->id}}" name="miembro_id">
         

          </div>
        </div>
      </div>
    </div>
      
             <h3>Muchas Gracias por contestar la encuesta!</h3>
    
        <button type="reset" class="btn btn-default" data-dismiss="modal">Restear</button>
        {!! Form::submit( 'Enviar', ['class'=>'btn btn-success']) !!}
      </div>
      {!! Form::close() !!}
    </div>



      
            <a class="btn btn-primary " href="#">Regresar a perfil</a>

          </article> <!-- end .uou-block-7f -->







        </div> <!-- end grid layout -->



   

     


          </div> <!-- end uou-sidebar -->
        </div>

      </div> <!-- end row -->

    </div> <!-- edn cotainer -->

  </div> <!-- end blog-content -->



</div>
<!-- end #main-wrapper -->
@include('layouts.partials.footer')

@include('layouts.partials.scripts')
<script  type="text/javascript" charset="utf-8" >
$("#encuesta-add-form").validate({
    
  });
</script>
</body>


</html>
