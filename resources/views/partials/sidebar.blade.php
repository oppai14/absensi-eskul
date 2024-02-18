<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="https://uinsgd.ac.id/" class="brand-link">
    <img src="{{ asset('img/bn.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SMK BAKTI NUSANTARA 666</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/pribadi.jpeg') }}"class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        {{-- <a href="#" class="d-block">{{ auth()->user()->name }}</a> --}}
      </div>
    </div>

   

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
      {{-- Halaman Sasaran     --}}
          <ul class="nav nav-treeview">
            <li class="nav-item">
              
              <a href="{{ route('anggota.index') }}" class="nav-link {{ Request::is('anggota') ? 'active' : '' }}">
                <i class="bi bi-folder2-open"></i>
                <p>Anggota</p>
              </a>
    
            </li>
           </ul>
           <ul class="nav nav-treeview">
            <li class="nav-item">
              
              <a href="{{ route('absen.index') }}" class="nav-link {{ Request::is('absen') ? 'active' : '' }}">
                <i class="bi bi-folder2-open"></i>
                <p>Absen</p>
              </a>
    
            </li>
           </ul>
         
      {{-- End Halaman Sasarans --}}

      {{-- Halaman Kinerja     --}}
      <ul class="nav nav-treeview">
            <li class="nav-item">
              @can ('admin')
              {{-- <a href="{{ route('kinerjas.index') }}" class="nav-link  {{ Request::is('kinerjas') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Kinerja</p>
              </a>
              @endcan
            </li>
           </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @can ('dekan')
              {{-- <a href="{{ route('kinerjas.index') }}" class="nav-link  {{ Request::is('kinerjas') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Kinerja</p>
              </a>
              @endcan
            </li>
           </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @can ('wakildekan')
              {{-- <a href="{{ route('kinerjas.index') }}" class="nav-link  {{ Request::is('kinerjas') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Kinerja</p>
              </a>
              @endcan
            </li>
           </ul>
      {{-- End Halaman Kinerja --}}

      {{-- Halaman Target --}}
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @can('admin')
              {{-- <a href="{{ route('targets.index') }}" class="nav-link  {{ Request::is('targets') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Target</p>
              </a>
            </li>
            @endcan
           </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @can('operator')
              {{-- <a href="{{ route('targets.index') }}" class="nav-link  {{ Request::is('targets') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Target</p>
              </a>
            </li>
            @endcan
           </ul>
        {{-- End Halaman Target --}}

        {{-- Halaman Capaian --}}
          <ul class="nav nav-treeview">
            @can ('admin')
            <li class="nav-item">
              {{-- <a href="{{ route('capaians.index') }}" class="nav-link  {{ Request::is('capaians') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Capaian</p>
              </a>
            </li>
            @endcan
           </ul>
          <ul class="nav nav-treeview">
            @can ('operator')
            <li class="nav-item">
              {{-- <a href="{{ route('capaians.index') }}" class="nav-link  {{ Request::is('capaians') ? 'active' : '' }}"> --}}
                <i class="bi bi-folder2-open"></i>
                <p>Capaian</p>
              </a>
            </li>
            @endcan
           </ul>
        {{-- End Halaman Capaian --}}
      
      
      <ul class="nav nav-pills nav-sidebar flex-column">
        @can ('admin')
        <li class="nav-item">
          {{-- <a href="{{ route('users.index') }}" class="nav-link"> --}}
            <i class="bi bi-person-video2"></i>
            <p>User</p>
          </a>
        </li>
        @endcan
       </ul>
           {{-- @auth    
           <div><a href="{{ route('logout') }}" class="btn btn-sm btn-secondary">Logout >></a></div>
           @endauth --}}
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>