<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="{{route('dashboard')}}">
        <img src="{{asset('assets/img/edu.png')}}"  class="navbar-brand-img
        mx-auto" alt="...">
      </a>

      <!-- User (xs) -->
      <div class="navbar-user d-md-none">

        <!-- Dropdown -->
        <div class="dropdown">

          <!-- Toggle -->
          <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
              <img src="./assets/img/avatars/profiles/logo-dupak.jpg" class="avatar-img rounded-circle" alt="...">
            </div>
          </a>

          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
            <a href="./profile-posts.html" class="dropdown-item">Profile</a>
            <a href="./account-general.html" class="dropdown-item">Settings</a>
            <hr class="dropdown-divider">
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
          </div>

        </div>

      </div>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">

        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fe fe-search"></span>
              </div>
            </div>
          </div>
        </form>

        <!-- Navigation -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
                    <i class="fe fe-grid"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#masterKegiatan" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="masterKegiatan">
                  <i class="fe fe-file"></i> Master Kegiatan
                </a>
                <div class="collapse {{ Request::is('master_kegiatan/bab') || Request::is('master_kegiatan/subbab') || Request::is('master_kegiatan/modul') ? 'show' : '' }}" id="masterKegiatan">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="{{route('bab_kegiatan')}}" class="nav-link {{ Request::is('master_kegiatan/bab') ? 'active' : '' }}">
                        Bab Kegiatan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('subbab_kegiatan')}}" class="nav-link {{ Request::is('master_kegiatan/subbab') ? 'active' : '' }}">
                        Subbab Kegiatan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('modul_kegiatan')}}" class="nav-link {{ Request::is('master_kegiatan/modul') ? 'active' : '' }}">
                        Modul Kegiatan
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="#manajemenDupak" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="manajemenDupak">
              <i class="fe fe-file"></i> Manajemen DUPAK
            </a>
            <div class="collapse {{ Request::is('dupak/parameter') || Request::is('dupak/dupak') || Request::is('dupak/cekstatus') ? 'show' : '' }}" id="manajemenDupak">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{route('dupak.parameter')}}" class="nav-link {{ Request::is('dupak/parameter') ? 'active' : '' }}">
                    Parameter
                  </a>
                </li>
                {{-- <li class="nav-item {{ Request::is('dupak/dupak') ? 'active' : '' }}">
                  <a href="./kanban.html" class="nav-link ">
                    DUPAK
                  </a>
                </li>
                <li class="nav-item {{ Request::is('dupak/cekstatus') ? 'active' : '' }}">
                  <a href="./orders.html" class="nav-link ">
                    Cek Status
                  </a>
                </li> --}}
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#dokumenKegiatan" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="dokumenKegiatan">
              <i class="fe fe-file"></i> Dokumentasi Kegiatan
            </a>
            <div class="collapse {{ Request::is('dokumentasi/tambah') || Request::is('dokumentasi/daftarkegiatan') ? 'show' : '' }}" id="dokumenKegiatan">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{route('dokumentasi.tambah')}}" class="nav-link {{ Request::is('dokumentasi/tambah') ? 'active' : '' }}">
                    Tambah Kegiatan
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('dokumentasi.daftarkegiatan')}}" class="nav-link {{ Request::is('dokumentasi/daftarkegiatan') ? 'active' : '' }}">
                    Daftar Kegiatan
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sidebarAkun" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarAkun">
              <i class="fe fe-file"></i> Manajemen Akun
            </a>
            <div class="collapse {{ Request::is('profile') || Request::is('profile/akun') ? 'show' : '' }}" id="sidebarAkun">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{route('profile.index')}}" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">
                    Profil Biodata
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('profile.akun')}}" class="nav-link {{ Request::is('profile/akun') ? 'active' : '' }}">
                    Ubah Profil
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item d-md-none">
            <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
              <span class="fe fe-bell"></span> Notifications
            </a>
          </li>
        </ul>


        <!-- Push content down -->
        <div class="mt-auto"></div>




        <!-- User (md) -->
        <div class="navbar-user d-none d-md-flex" id="sidebarUser">

          <!-- Dropup -->
          <div class="dropup">

            <!-- Toggle -->
            <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Halo, {{ auth()->user()->name }}
            </a>

            <!-- Menu -->
            <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
              <a href="{{route('profile.index')}}" class="dropdown-item">Profile</a>
              <hr class="dropdown-divider">
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </div>

          </div>


        </div>


      </div> <!-- / .navbar-collapse -->

    </div>
  </nav>
