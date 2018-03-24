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
     {!! Form::open(['action' => 'ComiteController@store', 'id' => 'asistencia-add-form']) !!}

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  
                
          <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
             <input type="hidden" name="estatus" value="Si">
      <h1>Favor de seleccionar el botón de Confirmo Asistencia para realizar la confirmación</h1>
  
 
                <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Muchas gracias por confirmar su participación</h4>
</div>
       
        {!! Form::submit( 'Confírmo Asistencia', ['class'=>'btn btn-success']) !!}

      {!! Form::close() !!}

      
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
  $("#asistencia-add-form").validate({
    
  });
  
</script>
</body>


</html>
