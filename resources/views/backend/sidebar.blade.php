
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="ti-settings"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/redirect')}}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/users')}}">
            <i class="menu-icon mdi mdi-account-circle-outline"></i>
            <span class="menu-title">Users</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Menu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu" style="list-style: none;">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/foodMenu')}}">Add Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/allMenu')}}">All Menu</a>
                </li>
              </ul>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/reservation')}}">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">Reservations</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#chefs" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Chefs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="chefs">
              <ul class="nav flex-column sub-menu" style="list-style: none;">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/add_chefs')}}">Add Chefs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/view_chefs')}}">All Chefs</a>
                </li>
              </ul>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/orders')}}">
            <i class="menu-icon mdi mdi-table"></i>
            <span class="menu-title">Orders</span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- partial -->

    <!-- main-panel ends -->

