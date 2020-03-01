@include("head")

  <!-- Body -->
  <body >

    <!-- Contenedor de Bootstrap -->
    <div class="container-fluid container-responsive ">

      <!-- Header -->
      <header>
      <!-- user-nav-wrap -->
     <div class="" id="nav-java">
         <div class="brand-wrap col-md-12 col-lg-12 offset-lg-0">
            <a href="/index">                 
    			<img src="/img/logo.png" alt="Galería de Arte" class="logo">  
            </a>
            <a href="/faq">
                 <i class="far fa-question-circle"></i>
                 Ayuda                   
            </a>        
     </div>
            @if( Auth::guest() )
   
        <div class="col-xs-12 col-md-12 col-lg-7 nav-rigth ">
            <ul class="col-12 user-nav ">
                <li class="col-xs-12 col-md-12 col-lg-2 offset-lg-5 text-center menu-desapa">
                    <a href="/login">Iniciar sesión</a>
                </li>
                <li class="col-xs-12 col-md-12 col-lg-2 text-center menu-desapa">
                    <a href="/register">Crear cuenta</a>
                </li>
            
                @guest
                  <li class="col-xs-12 col-md-12 col-lg-2 text-center">
                     <a href="{{ route('login') }}">Carrito</a>
                     <a href="{{ route('login') }}" class="col-6">
                       <i class="fas fa-shopping-cart"></i>
                     </a>
                  </li>
            </ul>            
            @endguest
            @else
            @guest
            
            <li class="nav-item">
                <a class="nav-link centrar-resposive" href="{{ route('login') }}">{{ __('') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item centrar-resposive">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                </li>
            @endif
            @else
            <div class="col-xs-12 col-md-12 col-lg-12">
            <!-- <div class="col-xs-12 col-md-12 col-lg-6 offset-lg-6"> -->
            <ul class="col-xs-12 col-md-12 col-lg-4 offset-lg-8 margen-derecho">
            <li class="nav-item dropdown text-center margen-derecho">
                <img class="mini-avatar" src="/storage/{{Auth::user()->avatar}}" align="left"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <!-- hola xxxx -->Hola {{ Auth::user()->name }} <span class="caret"></span> 
                </a>
        
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <strong><a class="dropdown-item" href="/index">Ir al inicio</a></strong>
                                
                <strong><a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Perfil</a></strong>

                <strong><a class="dropdown-item" href="{{ route('orders') }}">Mis compras</a></strong>

                <strong><a class="dropdown-item" href="/carrito">Mi carrito</a></strong>

                <strong><a class="dropdown-item" href="/perfil/{{ Auth::user()->id }}">Borrar Cuenta</a></strong>
                                
                <strong><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesion') }}
                        </a></strong>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                             </form>
                        </div>
                    </li>
                    <li class="col-4 margen-derecho">
                         <a href="#">
                          <i class="far fa-compass"></i>
                          Mis pedidos
                         </a>
                    </li>
                    <li class="col-3 margen-derecho">
                       <a href="#">
                        <i class="far fa-heart"></i>
                        Favoritos
                        </a>
                    </li>  
                    <li class="col-xs-12 col-md-12 col-lg-3 text-center margen-derecho">
                        <a href="/carrito">Carrito</a>
                        <a href="/carrito" class="col-6">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    </ul>
                    <!-- </div> -->
                    </div>
                @endguest
               
            </li>

        @endif
 
    </div>
    </div>
</div>      	    
</header>
@yield ("principal")
      @yield ("app")
      @yield ("registro")
      @yield ("faq")
      @yield ("Cuadros")
      @yield ("ordenes")
      
 
<!-- Footer -->
<footer class="row">

    <div class="col-xs-12 col-md-6 col-lg-2 offset-lg-5 redes-sociales">
        <ul>
        <li><a href="https://facebook.com/" target="_blank" class="fab fa-facebook redes-responsive"></a></li>
        <li><a href="https://instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
        <li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
        <li><a href="https://pinterest.com/" target="_blank" class="fab fa-pinterest"></a></li>
        </ul>
    </div>
    </footer>
    </div>

    <script>
    function accion(){
        document.getElementById("nav-java").style.display="none";
    //     for (var i = 0; i < ancla.length; i++){
    //         ancla[i].IdList.toogle("desaparece");
    //  var ancla =  }
    }
    </script>

  </body>

</html>
