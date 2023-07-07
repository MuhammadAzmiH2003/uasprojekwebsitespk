<aside class="main-sidebar sidebar-dark-success elevation-4">

    <!-- Brand Logo -->
      <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="images/susu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light fw-bold">MILKOW</span>
      </a>


    <!-- Akhir Brand Logo -->

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fa-solid fa-house"></i>
                  <p>Home</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('altupdate.index') }}" class="nav-link "> 
                <i class="nav-icon fa-solid fa-user"></i>
                  <p>Alternatif</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('kriteriaupdate.index') }}" class="nav-link "> 
                <i class="nav-icon fa-solid fa-list"></i>
                  <p>Kriteria</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('hitung.index') }}" class="nav-link "> 
                <i class="nav-icon fa-solid fa-users"></i>
                  <p>SPK</p>
                </a>
          </li>


        </ul>

        
      </nav>
    </div>
    <!-- Akhir sidebar menu -->
 
  </aside>