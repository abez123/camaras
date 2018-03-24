
 <!-- Top Toolbar -->
  <div class="toolbar">
    <div class="uou-block-1a blog">
      <div class="container">
        <div class="search"> <a href="#" class="toggle fa fa-search"></a>
          <form action="#">
            <input type="text" class="search-input" placeholder="Search ...">
            <input type="submit" value="">
          </form>
        </div>
        <ul class="social">
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-google-plus"></a></li>
        </ul>
        <ul class="authentication">
           @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @elseif(\Entrust::hasRole('SOCIO'))
                   <li><a href="{{ url('user_profile') }}">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}">Salir</a></li>
                    @else
                     <ul><li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a>
                      <li><a href="{{ url('/logout') }}">Salir</a></li></li></ul>
                @endif
      
        </ul>
        <div class="language"> <a href="#" class="toggle"><img src="http://localhost/ancham/public/socio-assets/images/flags/32/ES.png" alt=""> ES</a>
          <ul>
              <li><a href="#"><img src="http://localhost/ancham/public/socio-assets/images/flags/32/US.png" alt=""> ENG</a></li>
            <li><a href="#"><img src="http://localhost/ancham/public/socio-assets/images/flags/32/PT.png" alt=""> PT</a></li>
            <li><a href="#"><img src="http://localhost/ancham/public/socio-assets/images/flags/32/FR.png" alt=""> FR</a></li>
          
          </ul>
        </div>
      </div>
    </div>
    <!-- end .uou-block-1a --> 
  </div>
  <!-- end toolbar -->