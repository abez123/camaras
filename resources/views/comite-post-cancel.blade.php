@include('layouts.partials.htmlheader')
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

 @if($dayofweek !=2 || $dayofweek !=3)
  @if($asistencia->estatus == 'Si' && $days >= 3)
        <form class="form-horizontal" method="post"
      action="{{ URL::to('/asistencias/update/'.$asistencia->id) }}"
      autocomplete="off" id="asistencia-edit-form">

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
            <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
          
             <input type="hidden" name="estatus" value="Cancelada">
        <h1>Puede cancelar su participación sin cobro sin compromiso</h1>
  

      
                <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
       
        {!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
   
      {!! Form::close() !!}

      @elseif($asistencia->estatus == 'Si'  && $days <= 2 && $days >=1)
             <form class="form-horizontal" method="post"
      action="{{ URL::to('/asistencias/update/'.$asistencia->id) }}"
      autocomplete="off" id="asistencia-edit-form">

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
            <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
          
             <input type="hidden" name="estatus" value="Cancelada con cobro">
        <h1>Puede cancelar su participación sin cobro sin compromiso</h1>
  

      
                <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
       
        {!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
   
      {!! Form::close() !!}
      @elseif($asistencia->estatus == 'Si'  && $days <=0)
        <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Evento Cerrado</h4>
</div>
@else
  <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Su particpación ya fue cancelada</h4>
</div>
  @endif

  @elseif($daysofweek ==2)
     @if($asistencia->estatus == 'Si'  && $days <= 4)
       <form class="form-horizontal" method="post"
      action="{{ URL::to('/asistencias/update/'.$asistencia->id) }}"
      autocomplete="off" id="asistencia-edit-form">

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
            <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
          
             <input type="hidden" name="estatus" value="Cancelada">
        <h1>Puede cancelar su participación sin cobro sin compromiso</h1>
  

      
                <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
       
        {!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
   
      {!! Form::close() !!}
@elseif($asistencia->estatus == 'Si'  && $days <= 1 && $days >=0)
 <form class="form-horizontal" method="post"
      action="{{ URL::to('/asistencias/update/'.$asistencia->id) }}"
      autocomplete="off" id="asistencia-edit-form">

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
            <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
          
             <input type="hidden" name="estatus" value="Cancelada con cobro">
        <h1>Puede cancelar su participación sin cobro sin compromiso</h1>
  

      
                <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
       
        {!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
   
      {!! Form::close() !!}
      @elseif($asistencia->estatus == 'Si'  && $days <=0)
              <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Evento Cerrado</h4>
</div>
@else
  <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Su particpación ya fue cancelada</h4>
</div>
  @endif

  @elseif($daysofweek ==3)

  @if($asistencia->estatus == 'Si'  && $days <= 2)
   <form class="form-horizontal" method="post"
      action="{{ URL::to('/asistencias/update/'.$asistencia->id) }}"
      autocomplete="off" id="asistencia-edit-form">

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
            <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
          
             <input type="hidden" name="estatus" value="Cancelada">
        <h1>Puede cancelar su participación sin cobro sin compromiso</h1>
  

      
                <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
       
        {!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
   
      {!! Form::close() !!}
      @elseif($asistencia->estatus == 'Si'  && $days <= 1 && $days >=0)
      <form class="form-horizontal" method="post"
      action="{{ URL::to('/asistencias/update/'.$asistencia->id) }}"
      autocomplete="off" id="asistencia-edit-form">

<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
            <input type="hidden" name="convocatoria_id" value="{{$convocatoria_id}}">
          <input type="hidden" name="miembro_id" value="{{Auth::user()->id}}">
          
             <input type="hidden" name="estatus" value="Cancelada con cobro">
        <h1>Puede cancelar su participación sin cobro sin compromiso</h1>
  

      
                <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Favor de seleccionar el botón de Cancelar Asistencia</h4>
</div>
       
        {!! Form::submit( 'Cancelar Asistencia', ['class'=>'btn btn-success']) !!}
   
      {!! Form::close() !!}
      @elseif($asistencia->estatus == 'Si'  && $days <0)
        <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Evento Cerrado</h4>
</div>
@else
 <div class="alertfine">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h4>Su particpación ya fue cancelada</h4>
</div>
@endif
@endif
        @foreach($comites as $comite)
         <?php $imgs = \App\Models\Upload::find($comite->temarioimagen); ?>
        <div class="col-md-9">
          <article class="uou-block-7f blog-post-content">
            <img src="{{$imgs->path()}}" alt="">

            <div class="meta">
              <span class="time-ago">{{$comite->created_at}}</span>
              <span class="category">Coordinador: <a href="#">{{$comite->expositor}}</a></span>
              <a href="#" class="comments">12 Comments</a>
            </div>

            <h1><a href="#">{{$comite->tituloconvactoria}}</a></h1>

      
        
           <p><h6>Sede:</h6> {!!$comite->sedenombre!!}</p>
            <p><h6>Domicilio:</h6> {!!$comite->sededomicilio!!}</p>

<p><h6>Fecha y Horario:</h6>  {!!$comite->horario!!}</p>


<p><h6>Precio Socio:</h6> ${{$comite->preciosocio}}.00</p>
<p><h6>Precio No socio:</h6> ${{$comite->precionosocio}}.00</p>
<p><h6>Expositor:</h6> {{$comite->expositor}}</p>
<p><h6>Información Adicional:</h6> {!!$comite->comentarios!!}</p>

            <div class="uou-share-story clearfix">
              <div class="row">
                <div class="col-sm-3">
                  <h5 class="sidebar-title">Share This Story</h5>

                </div>
                <div class="col-sm-9 ">
                  <div class="social-widget">
                    <div class="uou-block-4b">

                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      </ul>

                    </div> <!-- end .uou-block-4b -->
                  </div> <!-- end social widget -->
                </div>
              </div>
            </div>

           @endforeach
            <a class="btn btn-primary " href="{{url('/front_comite/')}}">Regresar a perfil</a>

          </article> <!-- end .uou-block-7f -->


          <div class="uou-post-comment">
            <aside class="uou-block-14a">
              <h5 class="sidebar-title">Comments(<span>2</span>)</h5>
              <ul>
                <li>
                  <article class="comment">
                    <img src="img/p-post-1.png" alt="">

                    <div>
                      <header>
                        <a href="#" class="user">Jessica Walsh -</a>

                        <span class="time-ago">May 13, 2015(11.25)</span>
                        <a href="#" class="reply">Reply</a>
                      </header>

                      <p>Veniam minus obcaecati, quos facere et quibusdam debitis iure voluptate libero voluptas dolorem praesentium rerum adipisci ad fuga, odio molestiae. Soluta quos vel pariatur nemo fugit repellat. nemo fugit repellat</p>
                    </div>
                  </article>
                </li>


                <li>
                  <article class="comment">
                    <img src="img/p-post-1.png" alt="">

                    <div>
                      <header>
                        <a href="#" class="user">Jessica Walsh -</a>

                        <span class="time-ago">May 13, 2015(11.25)</span>
                        <a href="#" class="reply">Reply</a>
                      </header>

                      <p>Veniam minus obcaecati, quos facere et quibusdam debitis iure voluptate libero voluptas dolorem praesentium rerum adipisci ad fuga, odio molestiae. Soluta quos vel pariatur nemo fugit repellat. nemo fugit repellat</p>
                    </div>
                  </article>
                </li>

              </ul>
            </aside> <!-- end .uou-block-14a -->

 

          </div>





        </div> <!-- end grid layout -->

        <div class="col-md-3">
          <div class="uou-sidebar">

            <div class="search-widget">
              <form class="search-form-widget" action="#">
                <input type="text" class="search-input" placeholder="Search ...">
                <input type="submit" value="">
              </form>
            </div> <!-- end search-widget -->

            <h5 class="sidebar-title">Categories</h5>

            <div class="list-widget">
              <ul>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Mulitmedia</a></li>
                <li><a href="#">Offtopic</a></li>

              </ul>
            </div>


            <h5 class="sidebar-title">About Us</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>


            <h5 class="sidebar-title">Connect With Us</h5>

            <div class="social-widget">
              <div class="uou-block-4b">

                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>

              </div> <!-- end .uou-block-4b -->
            </div> <!-- end social widget -->

            <h5 class="sidebar-title">Popular Posts</h5>

            <div class="latest-post-widget">
              <div class="post-single">
                <img src="img/p-post-1.png" alt="">
                <p class="meta">January 12, 2015</p>
                <p class="meta">Design</p>
                <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>

              </div>

              <div class="post-single">
                <img src="img/p-post-2.png" alt="">
                <p class="meta">January 12, 2015</p>
                <p class="meta">Design</p>
                <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>

              </div>

              <div class="post-single">
                <img src="img/p-post-3.png" alt="">
                <p class="meta">January 12, 2015</p>
                <p class="meta">Design</p>
                <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>

              </div>
            </div> <!-- end latest-post-widget -->


            <h5 class="sidebar-title">Tag Cloud</h5>

            <div class="widget-tag">
              <div class="tag-cloud">
                <a class="btn btn-primary" href="#">User Experience</a>
                <a class="btn btn-primary" href="#">HTML 5</a>
                <a class="btn btn-primary" href="#">Css 3</a>
                <a class="btn btn-primary" href="#">web design</a>
                <a class="btn btn-primary" href="#">social media</a>
                <a class="btn btn-primary" href="#">web development</a>
                <a class="btn btn-primary" href="#">print design</a>
                <a class="btn btn-primary" href="#">e-commerce</a>
                <a class="btn btn-primary" href="#">java script</a>
              </div>

            </div>

            <h5 class="sidebar-title">Archive</h5>

            <div class="list-widget">
              <ul>
                <li><a href="#">May 2015</a></li>
                <li><a href="#">April 2015</a></li>
                <li><a href="#">July 2015</a></li>
                <li><a href="#">Frbruary 2015</a></li>
                <li><a href="#">January 2015</a></li>

              </ul>
            </div>


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
  $("#asistencia-edit-form").validate({
    
  });
  
</script>
</body>


</html>
