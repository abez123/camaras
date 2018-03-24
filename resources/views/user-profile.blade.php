@include('layouts.partials.htmlheader')

<body>
<div id="main-wrapper"> 
  
  <!-- Top Toolbar -->
 @include('layouts.partials.top_toolbar')  
  <!-- end toolbar -->
  
 @include('layouts.partials.navmenu')  
  <div class="compny-profile"> 
    <!-- SUB Banner -->
    <div class="profile-bnr user-profile-bnr">
      <div class="container">
        <div class="pull-left">
          @foreach($socios as $socio)
          <h2>{{$socio->nombre}}</h2>
          <h5>{{$socio->puesto}}</h5>
          @endforeach
        </div>
        
        <!-- Top Riht Button -->
        <div class="right-top-bnr">
          <div class="connect"> <a href="#." data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Connect</a> <a href="#."><i class="fa fa-share-alt"></i> Share</a>
            <div class="bt-ns"> <a href="#."><i class="fa fa-bookmark-o"></i> </a> <a href="#."><i class="fa fa-envelope-o"></i> </a> <a href="#."><i class="fa fa-exclamation"></i> </a> </div>
          </div>
        </div>
      </div>
      
      <!-- Modal POPUP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="container">
              <h6><a class="close" href="#." data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a> Send Message</h6>
              
              <!-- Forms -->
              <form action="#">
                <ul class="row">
                  <li class="col-xs-6">
                    <input type="text" placeholder="First Name ">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Last Name">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Country">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Email">
                  </li>
                  <li class="col-xs-12">
                    <textarea placeholder="Your Message"></textarea>
                  </li>
                  <li class="col-xs-12">
                    <button class="btn btn-primary">Send message</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Profile Company Content -->
    <div class="profile-company-content user-profile main-user" data-bg-color="f5f5f5">
      <div class="container">
        <div class="row"> 
          
          <!-- Nav Tabs -->
          <div class="col-md-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
              <li><a data-toggle="tab" href="#comitemiem">Comités</a> </li>
           
             
                  <li><a data-toggle="tab" href="#eventos">Eventos</a></li>
                  <li><a data-toggle="tab" href="#blog-tab">Noticias</a></li>
                  <li><a data-toggle="tab" href="#portfolio">Galeria</a></li>
               <li><a data-toggle="tab" href="#Con-tab">Member 2 Member</a></li>
              <li><a data-toggle="tab" href="#contact">Contact</a></li>
              
             
              <li><a data-toggle="tab" href="#flowrs-tabs">Directorio (241)</a></li>
             
            </ul>
          </div>
          
          <!-- Tab Content -->
          <div class="col-md-12">
            <div class="tab-content"> 
              
              <!-- PROFILE -->
              <div id="profile" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-12">
                    <div class="profile-main">
                      <h3>About</h3>
                      <div class="profile-in">
                        <div class="media-left">
                          <div class="img-profile"> <img class="media-object" src="../public/socio-assets/images/avatar-1.jpg" alt=""> </div>
                        </div>
                        <div class="media-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquidautem 
                            laudantium sapiente ad enim ipsa modi labo rum accusantium deleniti neque architecto vitae.<br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat accusamus nemo
                            itate id molestiae consectetur quae pariatur repudi andae vel ex quaerat nam iusto aliquid laborum quia adipisci aut ut imcati 
                            nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum, assumenda. <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, at nemo inventore temporibus corporis suscipit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8"> 
                    
                    <!-- Skills -->
                    <div class="sidebar">
                      <h5 class="main-title">Skills</h5>
                      <div class="job-skills"> 
                        
                        <!-- Logo Design -->
                        <ul class="row">
                          <li class="col-sm-3">
                            <h6><i class="fa fa-plus"></i> HTML5 and Css3</h6>
                          </li>
                          <li class="col-sm-9">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                            </div>
                          </li>
                        </ul>
                        
                        <!-- Logo Design -->
                        <ul class="row">
                          <li class="col-sm-3">
                            <h6><i class="fa fa-plus"></i> Logo Design</h6>
                          </li>
                          <li class="col-sm-9">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> </div>
                            </div>
                          </li>
                        </ul>
                        
                        <!-- Logo Design -->
                        <ul class="row">
                          <li class="col-sm-3">
                            <h6><i class="fa fa-plus"></i> Web Design</h6>
                          </li>
                          <li class="col-sm-9">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> </div>
                            </div>
                          </li>
                        </ul>
                        
                        <!-- UI / UX -->
                        <ul class="row">
                          <li class="col-sm-3">
                            <h6><i class="fa fa-plus"></i> UI/UX</h6>
                          </li>
                          <li class="col-sm-9">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> </div>
                            </div>
                            <p>Preferred languages are Arabic, French & Italian. Proin nibh augue, suscipit asce lerisque sed, lacinia in, mi.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <!-- Professional Details -->
                    <div class="sidebar">
                      <h5 class="main-title">Similar Professionals</h5>
                      
                      <!-- Similar -->
                      <div class="similar">
                        <div class="media">
                          <div class="media-left">
                            <div class="inn-simi"> <img class="media-object" src="../public/socio-assets/images/med-avatar.jpg" alt=""> <a href="#">Profile </a> </div>
                          </div>
                          <div class="media-body">
                            <h5>Media heading</h5>
                            <p>SEO Specialist - New York, USA</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, 
                              voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum 
                              accusantium deleniti neque architecto vitae.</p>
                            
                            <!-- Share -->
                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                          </div>
                        </div>
                        
                        <!-- Similar -->
                        <div class="media">
                          <div class="media-left">
                            <div class="inn-simi"> <img class="media-object" src="../public/socio-assets/images/med-avatar.jpg" alt=""> <a href="#">Profile </a> </div>
                          </div>
                          <div class="media-body">
                            <h5>Denise Walsh</h5>
                            <p>SEO Specialist - New York, USA</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, 
                              voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum 
                              accusantium deleniti neque architecto vitae.</p>
                            
                            <!-- Share -->
                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                          </div>
                        </div>
                        
                        <!-- Similar -->
                        <div class="media">
                          <div class="media-left">
                            <div class="inn-simi"> <img class="media-object" src="../public/socio-assets/images/med-avatar.jpg" alt=""> <a href="#">Profile </a> </div>
                          </div>
                          <div class="media-body">
                            <h5>Denise Walsh</h5>
                            <p>SEO Specialist - New York, USA</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, 
                              voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum 
                              accusantium deleniti neque architecto vitae.</p>
                            
                            <!-- Share -->
                            <div class="share-w"><a href="#."><i class="fa fa-bookmark-o"></i></a> <a href="#."><i class="fa fa-envelope-o"></i></a> <a href="#."><i class="fa fa-eye"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Col -->
                  <div class="col-md-4"> 
                    
                    <!-- Professional Details -->
                    <div class="sidebar">
                      <h5 class="main-title">Professional Details</h5>
                      <div class="sidebar-information">
                        <ul class="single-category">
                          <li class="row">
                             @foreach($socios as $socio)
                            <h6 class="title col-xs-6">Nombre</h6>
                            <span class="subtitle col-xs-6">{{$socio->nombre}}</span></li>
                            @endforeach
                          <li class="row">
                            <h6 class="title col-xs-6">Age</h6>
                            <span class="subtitle col-xs-6">38 Years Old</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Location</h6>
                            <span class="subtitle col-xs-6">Jordan Amman</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Experiance</h6>
                            <span class="subtitle col-xs-6">15 Years</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Dgree</h6>
                            <span class="subtitle col-xs-6">MBA</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Career Lavel</h6>
                            <span class="subtitle col-xs-6">Mid-Level</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Phone</h6>
                            <span class="subtitle col-xs-6">(800) 123-4567</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Fax </h6>
                            <span class="subtitle col-xs-6">(800) 123-4568</span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">E-mail</h6>
                            <span class="subtitle col-xs-6"><a href="#.">example@example.com</a></span></li>
                          <li class="row">
                            <h6 class="title col-xs-6">Website</h6>
                            <span class="subtitle col-xs-6"><a href="#.">example.com </a></span></li>
                        </ul>
                      </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="sidebar">
                      <h5 class="main-title">Rating</h5>
                      <div class="sidebar-information">
                        <ul class="single-category com-rate">
                          <li class="row">
                            <h6 class="title col-xs-6">Expertise:</h6>
                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> </li>
                          <li class="row">
                            <h6 class="title col-xs-6">Knowledge:</h6>
                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i></span> </li>
                          <li class="row">
                            <h6 class="title col-xs-6">Quality::</h6>
                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> </li>
                          <li class="row">
                            <h6 class="title col-xs-6">Price:</h6>
                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> </li>
                          <li class="row">
                            <h6 class="title col-xs-6">Services:</h6>
                            <span class="col-xs-6"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></span> </li>
                        </ul>
                      </div>
                    </div>
                    
                    <!-- Social Profiles -->
                    <div class="sidebar">
                      <h5 class="main-title">Social Profiles</h5>
                      <ul class="socil">
                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              

                 <!-- Comites Miembro -->
              <div id="comitemiem" class="tab-pane fade">
                <div class="header-listing">
                    <h1>Listado de Comités ({{count($comites)}})</h1>
                 
                
                </div>

                <div class="listing listing-1">
                  <div class="listing-section">
                    @foreach($comites as $comite)
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Comité: {{$comite->nombre}}</h5>
                       
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Descripción: {{$comite->descripcion}}</h6>
                         <p>Objetivos: {!!$comite->objetivos!!}</p>
                          <p>Temas: {!!$comite->temas!!} <a href="#"></a></p>
                           <p>Fechas de sesión: {!!$comite->fechassesion!!} <a href="#"></a></p>
                      
               <?php $convocatorias = \App\Models\Convocatoria::select('convocatorias.id as idcon','convocatorias.tituloconvactoria','convocatorias.horario')->where('convocatorias.comite_id',$comite->id)->orderBy('convocatorias.created_at','ASC')->where('convocatorias.horario', '>=', date("Y-m-d H:i:s"))->whereNULL('convocatorias.deleted_at')->get(); ?>

               <?php $convocatoriapasts = \App\Models\Convocatoria::select('convocatorias.id as idcon','convocatorias.tituloconvactoria','convocatorias.horario')->where('convocatorias.comite_id',$comite->id)->orderBy('convocatorias.created_at','ASC')->where('convocatorias.horario', '<', date("Y-m-d H:i:s"))->whereNULL('convocatorias.deleted_at')->get(); ?>
             <?php $convcnt=count($convocatorias); ?>
            <?php $convcntpast=count($convocatoriapasts); ?>
                          <ul >                 
            @if($convcnt>0)
              <h6 class="title-tags">Convocatorias:</h6>
              @endif
            
               @foreach($convocatorias as $convo)
           
                            <li><a href="{{url('/front_comite/'.$convo->idcon)}}">{{$convo->tituloconvactoria}} | Fecha: {!!$convo->horario!!} Ver-></a></li>
                        
           
                      @endforeach
                      </ul>
                          <ul >
                      @if($convcntpast>0)
                    <h6 class="title-tags">Convocatorias pasadas:</h6>
                    @endif
             
                    @foreach($convocatoriapasts as $convo)
              
                         
                            <li><a href="{{url('/front_comite/'.$convo->idcon)}}">{{$convo->tituloconvactoria}} | Fecha: {!!$convo->horario!!} Ver-></a></li>                    
                          
                    @endforeach
                        </ul>
                              
        <h6 class="title-tags"><a href="{{url('front_comite_miembros/'.$comite->id)}}" >Ver Miembros:</a></h6>
                      
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
     <?php $pres = \App\User::find($comite->presidente); ?>

                          <li><a href="#"><i class="fa fa-globe"></i> Presidente:  {{$pres->name}}</a></li>
                           <li><a href="#"><i class="fa fa-globe"></i> Vice Presidente:  {{$comite->name}}</a></li>
    <?php $coors = \App\User::where('context_id',$comite->coordinador)->where('type','employee')->select(array('users.name'))->get(); ?>
                          @foreach($coors as $coor)
                            <li><a href="#"><i class="fa fa-globe"></i> Coordindor:  {{$coor->name}}</a></li>
                            @endforeach
                                        <?php 
                              
            $proper1 = $comite->miembros;
             

          $prop2 = str_replace('"', ' ', $proper1);
          $miems = json_decode($prop2); 
    
        $miembros = \App\Models\Contacto::whereIN('contactos.id',$miems)->where('contactos.id',Auth::user()->context_id)->select(array('contactos.id'))->get();
            ?>            @foreach($miembros as $miembro)
                          @if($miembro->id)
                            <li><a href="#"><i class="fa fa-star"></i> Eres Miembro</a></li>
                            @endif
                     
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    @endforeach
                  
                  </div>
                </div>
              </div>


               

           
              <!-- Contact -->
              <div id="contact" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Contact the Company</h3>
                  <div class="profile-in">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quis tenetur velit! Provident eum molestias aperiam suscipit distinctio ipsum cupiditate quasi, dolor sunt, cum reprehenderit quibusdam, repellendus eaque, quas magni.</p>
                    <form action="#">
                      <input type="text" placeholder="Name & Surname">
                      <input type="text" placeholder="E-mail address">
                      <input type="text" placeholder="Phone Number">
                      <textarea placeholder="Your Message"></textarea>
                      <button class="btn btn-primary">Send message</button>
                    </form>
                   <a href="https://calendar.google.com/calendar/embed?src=abelzmx%40gmail.com&ctz=America%2FMexico_City">aqui</a>
                 
                  </div>
                </div>
              </div>
              
              <!-- Portfolio -->
              <div id="portfolio" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Portfolio</h3>
                  <div class="profile-in">
                    <div class="uou-portfolio"> 
                      <!-- Portfolio Item -->
                      <section class="portfolio">
                        <div class="portfolio-filters-content"> 
                          <!-- Portfolio Item -->
                          <article class="development design"> <a href="../public/socio-assets/img/portfolio-1.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-1.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="design"> <a href="../public/socio-assets/img/portfolio-2.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-2.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="development branding"> <a href="../public/socio-assets/img/portfolio-3.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-3.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="development design"> <a href="../public/socio-assets/img/portfolio-6.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-6.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="branding development"> <a href="../public/socio-assets/img/portfolio-4.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-4.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="mobile branding"> <a href="../public/socio-assets/img/portfolio-5.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-5.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="branding"> <a href="../public/socio-assets/img/portfolio-7.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-7.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="branding"> <a href="../public/socio-assets/img/portfolio-2.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-2.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                          <!-- Portfolio Item -->
                          <article class="design development"> <a href="../public/socio-assets/img/portfolio-8.jpg" class="swipebox"> <img src="../public/socio-assets/img/portfolio-8.jpg" alt="" class="work img-responsive"> <span class="overlay"> <i class="fa fa-plus"></i> <b class="title"><strong>Photo Session</strong>Brands</b> </span> </a> </article>
                        </div>
                      </section>
                    </div>
                    <!-- end uou-portfolio --> 
                  </div>
                </div>
              </div>
           <!-- Evento Post -->
              <div id="eventos" class="tab-pane fade">
                <div class="profile-main">
                  <h2 class="text-center">Eventos</h2>
                  <div class="profile-in">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach($eventos as $evento)
              <?php $imgs = \App\Models\Upload::find($evento->logo); ?>
                        <article class="uou-block-7f"> <img src="{{$imgs->path()}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">{{$evento->fecha}}</span> <span class="category">Categoria: <a href="#">{{$evento->tiulo}}</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">{{$evento->titulo}}</a></h1>
                          <p> {!!$evento->fecha!!}...</p>
                          <a href="{{url('/evento/'.$evento->id)}}" class="btn btn-small btn-primary">Ver evento</a> </article>
                        <!-- end .uou-block-7f -->

                        @endforeach
           
                        <div class="text-center pt20">
                          <ul class="uou-paginatin list-unstyled">
                        <li>{{$eventos->links()}}</li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end row --> 
                    
                    <!-- end blog-content --> 
                    
                  </div>
                </div>

                <div class="profile-main">
                  <h2 class="text-center">Eventos Externos</h2>
                  <div class="profile-in">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach($eventos as $evento)
              <?php $imgs = \App\Models\Upload::find($evento->logo); ?>
                        <article class="uou-block-7f"> <img src="{{$imgs->path()}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">{{$evento->fecha}}</span> <span class="category">Categoria: <a href="#">{{$evento->tiulo}}</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">{{$evento->titulo}}</a></h1>
                          <p> {!!$evento->fecha!!}...</p>
                          <a href="{{url('/evento/'.$evento->id)}}" class="btn btn-small btn-primary">Ver evento</a> </article>
                        <!-- end .uou-block-7f -->

                        @endforeach
           
                        <div class="text-center pt20">
                          <ul class="uou-paginatin list-unstyled">
                        <li>{{$eventos->links()}}</li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end row --> 
                    
                    <!-- end blog-content --> 
                    
                  </div>
                </div>

              </div>
         
              <!-- Event Post -->
              <!-- Blog Post -->
              <div id="blog-tab" class="tab-pane fade">
                <div class="profile-main">
                  <h2 class="text-center">Noticias</h2>
                  <br>
                  <div class="profile-in">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach($noticias as $blog)
              <?php $imgs = \App\Models\Upload::find($blog->blogimg); ?>
                        <article class="uou-block-7f"> <img src="{{$imgs->path()}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">{{$blog->created_at}}</span> <span class="category">Categoria: <a href="#">{{$blog->nombrecat}}</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="{{url('/blog/'.$blog->id)}}">{{$blog->titulo}}</a></h1>
                          <p> {!!substr($blog->text, 0, 200)!!}...</p>
                          <a href="{{url('/blog/'.$blog->id)}}" class="btn btn-small btn-primary">Leer más</a> </article>
                        <!-- end .uou-block-7f -->

                        @endforeach
           
                        <div class="text-center pt20">
                          <ul class="uou-paginatin list-unstyled">
                        <li>{{$noticias->links()}}</li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end row --> 
                    
                    <!-- end blog-content --> 
                    
                  </div>
                </div>
              
                 <div class="profile-main">
                  <h2 class="text-center">¡Que no se te pase!</h2>
                  <br>
                  <div class="profile-in">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach($capsulas as $blog)
              <?php $imgs = \App\Models\Upload::find($blog->blogimg); ?>
                        <article class="uou-block-7f"> <video class="thumb" controls>
  <source src="{{$blog->url}}" type="video/mp4">
 
Your browser does not support the video tag.
</video>
                          <div class="meta"> <span class="time-ago">{{$blog->created_at}}</span> <span class="category">Categoria: <a href="#">{{$blog->nombrecat}}</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">{{$blog->titulo}}</a></h1>
                          <p> {!!substr($blog->text, 0, 200)!!}...</p>
                          <a href="{{url('/blog/'.$blog->id)}}" class="btn btn-small btn-primary">Leer más</a> </article>
                        <!-- end .uou-block-7f -->

                        @endforeach
           
                        <div class="text-center pt20">
                          <ul class="uou-paginatin list-unstyled">
                        <li>{{$capsulas->links()}}</li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end row --> 
                    
                    <!-- end blog-content --> 
                    
                  </div>
                </div>
     <div class="profile-main">
                  <h2 class="text-center">Inteligencia de Negocios</h2>
                    <br>
                  <div class="profile-in">
                    <div class="row">
                      <div class="col-md-12">
                        @foreach($infografias as $blog)
              <?php $imgs = \App\Models\Upload::find($blog->blogimg); ?>
                        <article class="uou-block-7f"> <img src="{{$imgs->path()}}" alt="" class="thumb">
                          <div class="meta"> <span class="time-ago">{{$blog->created_at}}</span> <span class="category">Categoria: <a href="#">{{$blog->nombrecat}}</a></span> <a href="#" class="comments">12 Comments</a> </div>
                          <h1><a href="#">{{$blog->titulo}}</a></h1>
                          <p> {!!substr($blog->text, 0, 200)!!}...</p>
                          <a href="{{url('/blog/'.$blog->id)}}" class="btn btn-small btn-primary">Leer más</a> </article>
                        <!-- end .uou-block-7f -->

                        @endforeach
           
                        <div class="text-center pt20">
                          <ul class="uou-paginatin list-unstyled">
                        <li>{{$infografias->links()}}</li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end row --> 
                    
                    <!-- end blog-content --> 
                    
                  </div>
                </div>

              </div>
         
              <!-- Blog Post -->
              <div id="Con-tab" class="tab-pane fade">
                <div class="profile-main">
                  <h3>People in Connections</h3>
                  <div class="profile-in">
                    <div class="folow-persons">
                      <ul>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row">
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-1" class="styled" type="checkbox">
                                <label for="checkbox1-1"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-2" class="styled" type="checkbox">
                                <label for="checkbox1-2"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-3" class="styled" type="checkbox">
                                <label for="checkbox1-3"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-4" class="styled" type="checkbox">
                                <label for="checkbox1-4"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-5" class="styled" type="checkbox">
                                <label for="checkbox1-5"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-6" class="styled" type="checkbox">
                                <label for="checkbox1-6"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox1-7" class="styled" type="checkbox">
                                <label for="checkbox1-7"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Blog Post -->
              <div id="flowrs-tabs" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Followers</h3>
                  <div class="profile-in">
                    <div class="folow-persons">
                      <ul>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row">
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-1" class="styled" type="checkbox">
                                <label for="checkbox2-1"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-2" class="styled" type="checkbox">
                                <label for="checkbox2-2"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-3" class="styled" type="checkbox">
                                <label for="checkbox2-3"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-4" class="styled" type="checkbox">
                                <label for="checkbox2-4"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-5" class="styled" type="checkbox">
                                <label for="checkbox2-5"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-6" class="styled" type="checkbox">
                                <label for="checkbox2-6"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox2-7" class="styled" type="checkbox">
                                <label for="checkbox2-7"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Blog Post -->
              <div id="foll-tabs" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Following</h3>
                  <div class="profile-in">
                    <div class="folow-persons">
                      <ul>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row">
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-1" class="styled" type="checkbox">
                                <label for="checkbox3-1"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-2" class="styled" type="checkbox">
                                <label for="checkbox3-2"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-3" class="styled" type="checkbox">
                                <label for="checkbox3-3"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-4" class="styled" type="checkbox">
                                <label for="checkbox3-4"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-5" class="styled" type="checkbox">
                                <label for="checkbox3-5"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-6" class="styled" type="checkbox">
                                <label for="checkbox3-6"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                        
                        <!-- MEMBER -->
                        <li>
                          <div class="row"> 
                            <!-- Title -->
                            <div class="col-xs-4"> 
                              <!-- Check Box -->
                              <div class="checkbox">
                                <input id="checkbox3-7" class="styled" type="checkbox">
                                <label for="checkbox3-7"></label>
                              </div>
                              <!-- Name -->
                              <div class="fol-name">
                                <div class="avatar"> <img src="../public/socio-assets/images/sm-avatar.jpg" alt=""> </div>
                                <h6>Collin Weiland</h6>
                                <span>Web Developer</span> </div>
                            </div>
                            <!-- Location -->
                            <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                            <!-- Network -->
                            <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                            <!-- Connections -->
                            <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@include('layouts.partials.footer')
@include('layouts.partials.scripts')
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'http://localhost/ancham/public/user_profile',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.tutorial_list').append(html);
            }
        }); 
    });
});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59a99bdfc28eca75e461d9ae/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>


</html>