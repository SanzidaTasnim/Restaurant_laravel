<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
      </div>
      <div>
        <a href="{{url('/redirect')}}" class="navbar-brand" style="font-size: 20px; font-weight: bold;">Eatery <span style="color: #ce3232;">.</span> Cafe</a>

        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="backend/images/logo-mini.svg" alt="logo" />
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
      <ul class="nav navbar-nav navbar-nav-first ms-auto">
        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3" >
              <p class="mb-0 font-weight-medium float-left">Select category</p>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Food</p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item d-none d-lg-block">
          <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
            <span class="input-group-addon input-group-prepend border-right">
              <span class="icon-calendar input-group-text calendar-icon"></span>
            </span>
            <input type="text" class="form-control">
          </div>
        </li>
        <li class="nav-item">
          <form class="search-form" action="#">
            <i class="icon-search"></i>
            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
          </form>
        </li>

        <li>
          @if (Route::has('login'))
          @auth
              <li class="nav-item dropdown border-left">
                  {{-- <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> --}}

                  <a id="navbarDropdown" class="nav-link dropdown-toggle dropdown-bordered dropdown-toggle-split" href="#" role="button"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                      {{ Auth::user()->name }}
                      <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list text-black" aria-labelledby="navbarDropdown" style="top: 45px; padding: 0;">
                      <a class="dropdown-item" style="color:black; border: 0; padding: 10px 25px;" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        </li>
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="backend/images/faces/face8.jpg" alt="Profile image">
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
