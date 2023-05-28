
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">
         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a href="{{url('/')}}" class="navbar-brand">Eatery <span>.</span> Cafe</a>
         </div>

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-nav-first">
                   <li><a href="#home" class="smoothScroll">Home</a></li>
                   <li><a href="#about" class="smoothScroll">About</a></li>
                   <li><a href="#team" class="smoothScroll">Chef</a></li>
                   <li><a href="#menu" class="smoothScroll">Menu</a></li>
                   <li><a href="#contact" class="smoothScroll">Contact</a></li>
                   <li style="display: flex;">
                        <a href="#" class="smoothScroll">Cart</a>
                        <div class="cart">
                            @auth
                                <span class="count">{{$count}}</span>
                                <i class="material-icons" style="color: cadetblue;transform:translateY(8px)">shopping_cart</i>
                            @endauth
                            @guest
                                <span class="count">0</span>
                                <i class="material-icons" style="color: cadetblue;transform:translateY(8px)">shopping_cart</i>
                            @endguest
                        </div>
                   </li>
                   @if (Route::has('login'))
                          @auth
                              <li class="nav-item dropdown border-left">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                      <span class="caret"></span>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list text-black" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" style="color:black;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @else
                              <li class="nav-item">
                                  <a class="smoothScroll" href="{{ route('login') }}">LogIn</a>
                              </li>
                              <li class="nav-item">
                                  <a class="smoothScroll" href="{{ route('register') }}">Register</a>
                              </li>
                          @endauth
                   @endif
              </ul>

              <ul class="nav navbar-nav navbar-right">
                   <a href="#contact" class="section-btn">Reserve a table</a>
              </ul>
         </div>

    </div>
</section>
