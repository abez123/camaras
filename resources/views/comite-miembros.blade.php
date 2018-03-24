@include('layouts.partials.htmlheader')

<body>
<div id="main-wrapper">
@include('layouts.partials.top_toolbar')  
@include('layouts.partials.navmenu')  
 

  <!-- SUB Banner -->
  <div class="profile-bnr sub-bnr user-profile-bnr">
    <div class="position-center-center">
      <div class="container">
        @foreach($comites as $comite)
        <h2>Comité Miembros: {{$comite->nombre}}</h2>
        @endforeach
      </div>
    </div>
  </div>


  <div class="blog-content pt60">
    <div class="container">
      <div class="row">
        @foreach($comites as $comite)
                  
 <?php    $proper1 = $comite->miembros;          
          $prop2 = str_replace('"', ' ', $proper1);
          $miems = json_decode($prop2);     
          $miembros = \App\Models\Contacto::whereIN('contactos.id',$miems)->join('organizations','organizations.id','=','contactos.empresa')->select(array('contactos.id','contactos.nombre','contactos.correo','contactos.cel','organizations.name'))->get();
  ?> 
              <h6 class="title-tags">Miembros:</h6>
                          <ul >
                           @foreach($miembros as $miembro)
                                <li><a href="mailto:{{$miembro->correo}}">{{$miembro->nombre}}
                                 | {{$miembro->name}}
                          </a>
   <?php    $usernow =Auth::user()->context_id;          
             
            $miembroactuales = \App\Models\Contacto::where('contactos.id',$usernow)->join('organizations','organizations.id','=','contactos.empresa')->select(array('contactos.id','contactos.nombre','contactos.correo','contactos.cel','organizations.name'))->get();
  ?> 
                            @foreach($miembroactuales as $miembroactual)
                           <div class="desktop-visible"> 
                          <a class="desktop-visible" href="https://api.whatsapp.com/send?text=Mi Tel: {{ $miembroactual->cel}}Socio AMCHAM GDL: {{ $miembroactual->nombre}} Comite: {{ $comite->nombre}}!&phone={{$miembro->cel}}" target="_blank">WhatsApp</a>


                        </div>
                          @endforeach
                 
                        </li>
                        @endforeach
                          </ul>


           @endforeach
  <a class="btn btn-primary " href="{{url('/user_profile/')}}">Regresar a perfil</a>
            






        </div> <!-- end grid layout -->


      </div> <!-- end row -->

    </div> <!-- edn cotainer -->




</div>
<!-- end #main-wrapper -->
@include('layouts.partials.footer')

@include('layouts.partials.scripts')
</body>


</html>
