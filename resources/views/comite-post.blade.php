@include('layouts.partials.htmlheader')

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
             @if($comite->horario >= date('Y-m-d H:i:s'))
 
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
            @endif


            @if($estatus === 'Si')
<h4>Asistencia Confirmada</h4>
@else
<a class="btn btn-success " href="{{url('/asistencias/email/'.$convocatoria_id)}}">Confirmar Asistencia</a>
@endif

@foreach($asist as $as)
@if($as->asistencia == 1)
<h2>Asistió al comité</h2>
@elseif($as->asistencia == 0)
<h2>No Asistió al comité</h2>
@endif

@endforeach

           @endforeach
            <a class="btn btn-primary " href="{{url('/user_profile/')}}">Regresar a perfil</a>
            


          </article> <!-- end .uou-block-7f -->
        @if($comite_aviso)
        <div class="col-md-9">
          <article class="uou-block-7f blog-post-content">
          <?php $cntavisos=count($comite_aviso); ?>
            <h1>Avisos de la convocatoria ({{$cntavisos}})</h1>
         
              @foreach($comite_aviso as $aviso)

             <p><h4>Titulo:</h4>{{$aviso->titulo}}</p>
               
               <p><h6>Tipo de aviso:</h6>{{$aviso->tipo}}</p>
               @if($aviso->aviso)
               <p><h6>Aviso:</h6>{!!$aviso->aviso!!}</p>
               @endif
               @if($aviso->minuta)
                <p><h6>Minuta:</h6>{!! $aviso->minuta!!}</p>
               @endif
               @if($aviso->seguimimiento)
                <p><h6>Seguimiento:</h6>{!! $aviso->seguimimiento!!}</p>
               @endif
                <p><h6>Escrito por:</h6>{{ $aviso->name}}</p>
                <?php $cnt=count($uploads); ?>
                @if($cnt!=0)

             
                <h6>Archivos:  ({{$cnt}}) </h6>
                @foreach ($uploads as $p) 

               <div class="listing-tabs">
                <ul>
                   
                  <li> <a href="{{$p->path()}}" download>{{$p->name}}</a></li>
                 </ul>
                 
                </div>
                 @endforeach
             
               
              
               @endif
        
              @endforeach

          </article>
        </div>
        @endif


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

            <h5 class="sidebar-title">Newsletter</h5>
          
            <div class="latest-post-widget">

                @foreach($noticias as $noticia)
       <?php $imgs = \App\Models\Upload::find($noticia->blogimg); ?>
              <div class="post-single">
                <img src="{{$imgs->path()}}" alt="">
                <p class="meta">{{$noticia->created_at}}</p>
                <p class="meta">Categoria: {{$noticia->nombrecat}}</p>
                <h6 class="post-title"><a href="{{url('/blog/'.$noticia->id)}}">{!!substr($noticia->titulo, 0, 20)!!}...</a></h6>

              </div>
              @endforeach

           @foreach($infografias as $noticia)
       <?php $imgs = \App\Models\Upload::find($noticia->blogimg); ?>
         
              <div class="post-single">
                <img src="{{$imgs->path()}}" alt="">
                <p class="meta">{{$noticia->created_at}}</p>
                <p class="meta">Categoria: {{$noticia->nombrecat}}</p>
                <h6 class="post-title"><a href="{{url('/blog/'.$noticia->id)}}">{!!substr($noticia->titulo, 0, 20)!!}...</a></h6>

              </div>
              @endforeach

          @foreach($capsulas as $noticia)
       <?php $imgs = \App\Models\Upload::find($noticia->blogimg); ?>
     
              <div class="post-single">
                <img src="{{$imgs->path()}}" alt="">
                <p class="meta">{{$noticia->created_at}}</p>
                <p class="meta">Categoria: {{$noticia->nombrecat}}</p>
                <h6 class="post-title"><a href="{{url('/blog/'.$noticia->id)}}">{!!substr($noticia->titulo, 0, 20)!!}...</a></h6>

              </div>
              @endforeach
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
</body>


</html>
